@extends('suger.base')
@push('scripts')
@endpush
@section('nav')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/services">Services</a></li>
        <li class="active"><a href="/blog">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
@endsection
@section('content')
    <div class="grid_4">
        <div class="container">
            <h1 class="blog_head">Blog</h1>
            <div class="blog_grid span2">
                <div class="col-md-6 blog_box">
                    <a href="single.blade.php" class="mask"><img src="suger/images/b1.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
                    <h3><a href="single.blade.php">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
                    <div class="links">
                        <ul>
                            <li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
                            <li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
                            <li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
                    <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
                </div>
                <div class="col-md-6 blog_box">
                    <a href="single.blade.php" class="mask"><img src="suger/images/b2.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
                    <h3><a href="single.blade.php">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
                    <div class="links">
                        <ul>
                            <li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
                            <li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
                            <li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
                    <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="blog_grid">
                <div class="col-md-6 blog_box">
                    <a href="single.blade.php" class="mask"><img src="suger/images/b3.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
                    <h3><a href="single.blade.php">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
                    <div class="links">
                        <ul>
                            <li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
                            <li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
                            <li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
                    <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
                </div>
                <div class="col-md-6 blog_box">
                    <a href="single.blade.php" class="mask"><img src="suger/images/b4.jpg" alt="image" class="img-responsive zoom-img" alt=""/></a>
                    <h3><a href="single.blade.php">Ut wisi enim ad minim veniam, quis nostrud exerc</a></h3>
                    <div class="links">
                        <ul>
                            <li><i class="fa blog-icon fa-calendar"> </i><span>june 14, 2013</span></li>
                            <li><i class="fa blog-icon fa-user"> </i><span>admin</span></li>
                            <li><i class="fa blog-icon fa-comment"> </i><a href="#"><span>No comments</span></a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,nibh euismod tincidunt</p>
                    <a href="#" class="btn1 btn-8 btn-8c">Read More</a>
                </div>
            </div>
            <div class="pagination">
                <ul><li class="pagination-start firstItem"><span class="pagenav">Start</span></li>
                    <li class="pagination-prev"><span class="pagenav">Prev</span></li><li>
                        <span class="pagenav">1</span></li><li><a href="#" class="pagenav">2</a></li>
                    <li class="pagination-next"><a title="" href="#" class="border pagenav" data-original-title="Next">Next</a></li>
                    <li class="pagination-end lastItem"><a title="" href="#" class="border pagenav" data-original-title="End">End</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
