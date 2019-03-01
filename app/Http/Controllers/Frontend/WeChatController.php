<?php

namespace App\Http\Controllers\Frontend;

use App\Services\WeChatService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class WeChatController extends Controller
{
    public function templateMessage(WeChatService $weChatService)
    {
        try{
            // 阻止日志同步写入系统日志中
            $monolog = Log::getMonolog();
            $monolog->popHandler();
            // 自定义日志写入文件
            Log::useFiles(storage_path().'/logs/wechat_serve.log');

            $data = [
                'title' => 'MasterNode异常警告',
                'time' => Carbon::now()->format('Y-m-d H:i:s'),
                'error_time' => Carbon::now()->format('Y-m-d H:i:s'),
                'state' => 'NODE_ERROR',
            ];

            $app = $weChatService->officialAccount();
            $app->template_message->send([
                'touser' => 'ot5vs5-xV8lEK0_nnM1Ye7Y7Iaks',
                'template_id' => '6p12Jqmixe3T-mIv3sWHEhx8cxvlml2mWfQy3peVz0w',
                'url' => 'http://suger.mxker.cn',
                'data' => $data
            ]);

        }catch (\Exception $e){
            Log::error($e->getMessage());
        }
    }
    
    public function serve(Request $request, WeChatService $weChatService)
    {
        // 阻止日志同步写入系统日志中
        $monolog = Log::getMonolog();
        $monolog->popHandler();
        // 自定义日志写入文件
        Log::useFiles(storage_path().'/logs/wechat_serve.log');

        // 验证微信服务器
        if( $request->isMethod('GET') ){
            $signature = $request->input('signature');
            $timestamp = $request->input('timestamp');
            $nonce = $request->input('nonce');

            $echoStr = $request->input('echostr');

            if( $this->checkSignature($signature, $timestamp, $nonce) ){

                Log::info('Verify successfully.');
                return $echoStr;
            }else{
                Log::info('Token verification failed.');
            }

        // 响应微信服务器
        }else if( $request->isMethod('POST') ){

            Log::info($request->getClientIp());

            try{
                Log::info('Post request arrived.');

                $app = $weChatService->officialAccount();
                $serve = $app->server;
                $user = $app->user;

                $serve->push( function( $message ) use ( $user, $weChatService ){

                    Log::info('Welcome to Nodeasy.');

                    $fromUser = $user->get($message['FromUserName']);
                    $userOpenId = $fromUser['openid'];
                    $nickname = $fromUser['nickname'];

                    Log::info($fromUser);
                    Log::info($message);

                    if( $message['MsgType'] == 'event' ){
                        if( $message['Event'] == 'subscribe' ){

                            return "{$fromUser['nickname']}，您好！欢迎关注书香阁教育官网。";

                        }else if( $message['Event'] == 'unsubscribe' ){

                            Log::info($userOpenId . ' Cancel the attention');

                        }else if( $message['Event'] == 'SCAN' ){

                            $sceneId = $message['EventKey'];
                            if( !$this->updateUserOpenId($sceneId, $userOpenId, $nickname) ){
                                throw new \Exception('WeChat openId update failed');
                            }
                        // 菜单主动推送事件
                        }else if( $message['Event'] == 'CLICK' ){

                            if( $message['EventKey'] == 'AUTO_GET_MESSAGE' ){
                                $nodeData = $this->getNodeDetail($userOpenId);
                                $nodeData['wx_open_id'] = $userOpenId;
                                Log::info($nodeData);
                                return "有任何疑问请致电：086 66668888 或者添加微信：17311200692";
                            }

                        }

                    }else if( $message['MsgType'] == 'text'){

                        if( $message['Content'] == '关闭收益提醒' ){

                            $this->cancelWeChatNotify($userOpenId,'EARN');
                            return '已成功为您关闭收益提醒通知。如需开启，请回复“开启收益提醒”关键词';

                        }else if( $message['Content'] == '关闭监控提醒' ){

                            $this->cancelWeChatNotify($userOpenId,'ERROR');
                            return '已成功为您关闭监控提醒通知。如需开启，请回复“开启监控提醒”关键词';

                        }else if( $message['Content'] == '开启收益提醒' ){

                            $this->startWeChatNotify($userOpenId,'EARN');
                            return '已成功为您开启收益提醒通知。如需关闭，请回复“关闭收益提醒”关键词';

                        }else if($message['Content'] == '开启监控提醒'){

                            $this->startWeChatNotify($userOpenId,'ERROR');
                            return '已成功为您开启监控提醒通知。如需关闭，请回复“关闭监控提醒”关键词';

                        }else{
                            return '您好，如有疑问，请添加客服微信：shangzhanfengyun。';
                        }

                    }
                });

                return $app->server->serve();

            }catch (\Exception $e){
                Log::error($e->getMessage());
            }

        }else{
            Log::info('The unknown message.');
        }

    }

    /**
     * 生成代用户信息的二维码
     *
     * @param WeChatService $weChatService
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function createQrCode(WeChatService $weChatService )
    {
        try{
            $user = Auth::user();

            // 微信的公众号服务
            $officialAccount = $weChatService->officialAccount();
//            $qrCodeArr = $officialAccount->qrcode->temporary($user->email, env('WECHAT_QRCODE_EXPRIE'));
            $qrCodeArr = $officialAccount->qrcode->forever(strval($user->id));

            if( isset($qrCodeArr['errcode']) ){
                Log::info('Create QrCode failed.');

                throw new \Exception('Create QrCode failed.');
            }

            $qrCodeUrl = $officialAccount->qrcode->url($qrCodeArr['ticket']);
            return $this->responseOk('Create QrCode success.', $qrCodeUrl);

        }catch (\Exception $e){

            return $this->responseError($e->getMessage());
        }
    }

    /**
     * 微信提供的校验规则
     *
     * @param $signature
     * @param $timestamp
     * @param $nonce
     * @return bool
     */
    private function checkSignature($signature, $timestamp, $nonce)
    {
        $token = env('WECHAT_TOKEN');
        $tmpArr = array( $token, $timestamp, $nonce );
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }

    }


    /**
     *
     * @param Request $request
     * @param WeChatService $weChatService
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function startRequest(Request $request, WeChatService $weChatService)
    {
        $app = $weChatService->officialAccount();
        $oauth = $app->oauth;

        return $oauth->setRequest($request)->redirect();
    }
}
