@extends('suger.base')
@section('nav')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/services">Services</a></li>
        <li><a href="/blog">Blog</a></li>
        <li class="active"><a href="/contact">Contact</a></li>
    </ul>
@endsection
@section('content')
    <div class="grid_4">
        <div class="container">
            <h1 class="blog_head">Contact</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="contact">
                <div class="col-md-4 contact_left">
                    <h3>Contact info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing vestibulum sapien, in ultricies tellus dignissim eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p> Praesent mollis dolor eros, vel facilisis nisi auctor ut. Cras id convallis ipsum. Mauris posuere, ligula ac sodales sollicitudin, risus sapien iaculis libero, ac molestie orci arcu non ante. Fusce est leo, ornare ut porta quis, dictum et mi. Aliquam vel pretium sem</p>
                </div>
                <div class="col-md-8 contact_right">
                    <h3>Catch me</h3>
                    <form>
                        <div class="text">
                            <div class="text-fild">
                                <span>Name:</span>
                                <input type="text" class="text" value="Your Name here" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name here';}">
                            </div>
                            <div class="text-fild">
                                <span>Email:</span>
                                <input type="text" class="text" value="Your Email here" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Email here';}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="msg-fild">
                            <span>Subject:</span>
                            <input type="text" class="text" value="Your Subject here" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Subject here';}">
                        </div>
                        <div class="message-fild">
                            <span>Message:</span>
                            <textarea> </textarea>
                        </div>
                        <label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Send"></label>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
