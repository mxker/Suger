<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link href="{{ asset("suger/css/bootstrap.css") }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('suger/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('suger/js/bootstrap.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('suger/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.useso.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link rel="stylesheet" href="{{ asset('suger/fonts/css/font-awesome.min.css') }}">
    <!----font-Awesome----->
    <!--Animation-->
    <script src="{{ asset('suger/js/wow.min.js') }}"></script>
    <link href="{{ asset('suger/css/animate.css') }}" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
    @stack('scripts')
</head>
<body>
<div class="header-home">
    <div class="fixed-header">
        <div class="logo wow bounceInDown" data-wow-delay="0.4s">
            <a href="/">
                <span class="secondary">Careers,skills</span>
                <span class="main">Ability</span>
            </a>
        </div>
        <div class="top-nav wow bounce" data-wow-delay="0.4s">
            <span class="menu"> </span>
            @yield('nav')
            <!-- script-nav -->
            <script>
                $("span.menu").click(function(){
                    $(".top-nav ul").slideToggle(500, function(){});
                });
            </script>
            <!-- //script-nav -->
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@yield('roll')
<!--script-->
<script>
    $(document).ready(function(){
        $(".top-nav li a").click(function(){
            $(this).parent().addClass("active");
            $(this).parent().siblings().removeClass("active");
        });
    });
</script>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".header-home").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".header-home").addClass("fixed");
            }else{
                $(".header-home").removeClass("fixed");
            }
        });

    });
</script>
<!-- /script-for sticky-nav -->
<!--//header-->
</div>
@yield('content')
<div class="footer wow fadeInRight" data-wow-delay="0.4s">
    <div class="container">
        <div class="footer_top">
            <div class="col-sm-3">
                <ul class="list1">
                    <h3>Browse</h3>
                    <li><a href="#">Prices</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="list1">
                    <h3>Next Courses</h3>
                    <li><a href="#">Biology</a></li>
                    <li><a href="#">Management</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Literature</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="list1">
                    <h3>About Learn</h3>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Apply</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="socials">
                    <li><a href="#"><i class="fa fb fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa tw fa-twitter"></i></a></li>
                </ul>
                <ul class="list2">
                    <li><strong class="phone">+0018 58287 58</strong><br><small>Mon - Fri / 9.00AM - 06.00PM</small></li>
                    <li>Questions? <a href="malito:mail@demolink.org">mail(at)ability.com</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="copy">
{{--    <p>Copyright &copy; 2019.成都市温江区书香阁教育培训学校有限公司.--}}
{{--        <a href="http://suger.mxker.cn/" target="_blank" >书香阁教育培训学校</a>--}}
{{--        <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=15034350" target="_blank">蜀ICP备15034350号</a>--}}
{{--    </p>--}}
    <p>Copyright &copy; 2019 <a href="http://mxker.cn">http://mxker.cn</a> All rights reserved.<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=15034350" target="_blank">蜀ICP备15034350号</a>
    </p>
</div>

</body>
</html>
