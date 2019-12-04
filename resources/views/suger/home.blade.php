@extends('suger.base')
@section('nav')
    <ul>
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
@endsection
@section('roll')
    <div class="header wow fadeInUpBig" data-wow-delay="0.4s">
        <div class="container">
            <div class="header_top">
                <h1>Welcome</h1>
                <h2>to suger education</h2>
            </div>
        </div>
    </div>
@endsection
@section('content')
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
@endsection
