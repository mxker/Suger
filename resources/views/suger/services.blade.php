@extends('suger.base')
@push('scripts')
    <!------ light-box-script ----->
    <script src="suger/js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="suger/css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.about-grid a').Chocolat({linkImages:false});
        });
    </script>
    <!------ light-box-script ----->
@endpush
@section('nav')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li class="active"><a href="/services">Services</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
@endsection
@section('content')
    <div class="grid_4">
        <div class="container">
            <div class="about-grids service_box">
                <div class="col-sm-3 about-grid">
                    <a href="images/s5.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic12.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s6.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic13.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s8.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic15.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s1.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic8.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="about-grids service_box">
                <div class="col-sm-3 about-grid">
                    <a href="images/s7.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic14.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s9.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic16.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s10.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic17.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s11.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic18.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="about-grids">
                <div class="col-sm-3 about-grid">
                    <a href="images/s2.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic9.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s3.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic10.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s4.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic11.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="col-sm-3 about-grid">
                    <a href="images/s12.jpg" title="name" rel="title2">
                        <div class="view view-first">
                            <img src="images/pic19.jpg" class="img-responsive" alt=""/>
                            <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
                            </div>
                        </div>
                    </a>
                    <h3><a href="#">Duis autem</a></h3>
                    <p class="service_desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
