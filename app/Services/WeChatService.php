<?php
/**
 * Created by PhpStorm.
 * User: Mxker
 * Date: 2018/11/8
 * Time: 17:18
 */

namespace App\Services;

use EasyWeChat\Factory;
use Illuminate\Support\Facades\Log;

class WeChatService
{
    public function officialAccount()
    {
        $options = [
            'debug'     =>  true,
            'app_id'    => env('WECHAT_APP_ID', 'wx1523cbc7cc49b091'),
            'secret'    => env('WECHAT_SECRET', '3e2a43bfb3274177aaba066342c493c8'),
            'token'     => env('WECHAT_TOKEN', 'suger'),
            'log' => [
                'level' => env('WECHAT_LOG_LEVEL', 'debug'),
                'file'  =>  storage_path('logs/wechat.log'),
            ],
            'oauth' => [
                'scopes'   => ['snsapi_base'],
                'callback' => '/callback',
            ],
        ];

        $officialAccount =  Factory::officialAccount($options);

        $buttons = [
            [
                "type" => "view",
                "name" => "书香阁官网",
                "url"  => env('APP_URL')
            ],
            [
                "type" => "click",
                "name" => "课程回顾",
                "key"  => 'AUTO_GET_MESSAGE'
            ],
        ];
        $officialAccount->menu->create($buttons);

        return $officialAccount;
    }
}