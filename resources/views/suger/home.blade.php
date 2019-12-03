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

</head>
<body>
<div class="header wow fadeInUpBig" data-wow-delay="0.4s">
    <div class="container">
        <div class="header_top">
            <h1>Welcome</h1>
            <h2>to our education</h2>
        </div>
    </div>
</div>
<div class="header-home">
    <div class="fixed-header">
        <div class="logo wow bounceInDown" data-wow-delay="0.4s">
            <a href="index.html">
                <span class="secondary">Careers,skills</span>
                <span class="main">Ability</span>
            </a>
        </div>
        <div class="top-nav wow bounce" data-wow-delay="0.4s">
            <span class="menu"> </span>
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.blade.html">About</a></li>
                <li><a href="services.blade.html">Services</a></li>
                <li><a href="blog.blade.html">Blog</a></li>
                <li><a href="contact.blade.html">Contact</a></li>
            </ul>
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
<div class="grid_1">
    <div class="container">
        <div class="box_1  wow fadeInUpBig" data-wow-delay="0.4s">
            <h3>Why Join Learn</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="box_2">
            <div class="col-md-6">
                <div class="feature  wow fadeInRight" data-wow-delay="0.4s">
                    <i class="fa fa-film"> </i>
                    <h4>Video Lessons</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature wow fadeInLeft" data-wow-delay="0.4s">
                    <i class="fa fa-check"> </i>
                    <h4>Trusted Certifications</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="box_3 wow bounce" data-wow-delay="0.4s">
            <div class="col-md-6">
                <div class="feature">
                    <i class="fa fa-trophy"> </i>
                    <h4>Expert teachers</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature">
                    <i class="fa fa-microphone"> </i>
                    <h4>Audio Lessons</h4>
                    <p>
                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                    </p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="grid_2">
    <div class="container">
        <h3 class="head_1 wow rotateInUpLeft" data-wow-delay="0.4s"> 往期课程</h3>
        <div class="col-md-6 box_6 wow rotateInDownLeft " data-wow-delay="0.4s">
            {{--<embed class="img-responsive" style="width: 100%;height: 350px;" src='http://player.youku.com/player.php/sid/XNDEyNjI0ODcwNA==/v.swf' allowFullScreen='true' quality='high' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed>--}}
            <iframe class="img-responsive" style="width: 100%;height: 350px;" src='http://player.youku.com/embed/XNDEyNjIzNjcyMA==' frameborder=0 'allowfullscreen'></iframe>
            <div class="desc" style="height: 80px;">
                <h4>小学奥数</h4>
            </div>
        </div>
        <div class="col-md-6 box_6 wow lightSpeedIn" data-wow-delay="0.4s">
            {{--<embed class="img-responsive" style="width: 100%;height: 350px;" src='http://player.youku.com/player.php/sid/XNDEyNjIzNjcyMA==/v.swf' allowFullScreen='true' quality='high' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed>--}}
            <iframe class="img-responsive" style="width: 100%;height: 350px;"  src='http://player.youku.com/embed/XNDEyNjI0ODcwNA==' frameborder=0 'allowfullscreen'></iframe>
            <div class="desc" style="height: 80px;">
                <h4>高中物理</h4>
            </div>
        </div>

    </div>
</div>
<div class="grid_2">
    <div class="container">
        <h3 class="head_1 wow rotateInUpLeft" data-wow-delay="0.4s">Latest Courses</h3>
        <div class="col-md-4 box_6 wow rotateInDownLeft " data-wow-delay="0.4s">
            <img src="{{ asset('suger/images/pic1.jpg') }}" class="img-responsive" alt=""/>
            <div class="desc">
                <h4>Lorem Ipsum</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                <div class="more"><a href="#"><img src="{{ asset('suger/images/more.png') }}" alt=""></a></div>
            </div>
        </div>
        <div class="col-md-4 box_6 wow lightSpeedIn" data-wow-delay="0.4s">
            <img src="{{ asset('suger/images/pic2.jpg') }}" class="img-responsive" alt=""/>
            <div class="desc">
                <h4>Lorem Ipsum</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                <div class="more"><a href="#"><img src="{{ asset('suger/images/more.png') }}" alt=""></a></div>
            </div>
        </div>
        <div class="col-md-4 box_6 wow rotateIn " data-wow-delay="0.4s">
            <img src="{{ asset('suger/images/pic3.jpg') }}" class="img-responsive" alt=""/>
            <div class="desc">
                <h4>Lorem Ipsum</h4>
                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                <div class="more"><a href="#"><img src="{{ asset('suger/images/more.png') }}" alt=""></a></div>
            </div>
        </div>
    </div>
</div>
<div class="team">
    <div class="container">
        <h3 class="head_2 wow rollIn" data-wow-delay="0.4s">Welcome to our team</h3>
        <div class="img-wrapper wow slideInLeft" data-wow-delay="0.4s">
            <a href="#"><img src="{{ asset('suger/images/pic6.jpg') }}" class="img-responsive" alt=""/></a>
            <a href="#"><img src="{{ asset('suger/images/pic7.jpg') }}" class="img-responsive" alt=""/></a>
            <a href="#"><img src="{{ asset('suger/images/pic4.jpg') }}" class="img-responsive" alt=""/></a>
        </div>
        <blockquote class="blockquote1">
            <div class="block_info wow slideInRight" data-wow-delay="0.4s">
                <span class="heading">Lorem ipsum dolor sit amet, consectetuer</span>
                Dignissimos ducimus qui blanditiis praesentium voluptatum corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate nonrofficia deserunt mollitia animi id est.
            </div>
            <span class="author wow bounce" data-wow-delay="0.4s"><a href="#">Dolor Smith, (trainer)</a></span>
        </blockquote>
    </div>
</div>
<div class="students wow  zoomInDown" data-wow-delay="0.4s">
    <div class="container">
        <h3>Happy Students</h3>
        <div class="custom_testimonials_wrap_inner">
            <address><img src="{{ asset('suger/images/pic5.jpg') }}" class="img-responsive" alt=""/></address>
            <div class="extra-wrap">
                <i class="fa quote fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
                <p class="m_2"><a href="#">-&nbsp;&nbsp; Lorem ipsum dolor sit amet</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
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
    <p>Copyright &copy; 2019.<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=15034350" target="_blank">蜀ICP备15034350号</a>
    </p>
</div>

</body>
</html>
