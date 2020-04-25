<!DOCTYPE html>
<html lang="zxx">
<head>
    <link rel="stylesheet" href="{{asset('izanagi/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/animate.css')}}"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

@yield('content')

<section class="footer-top-section">
    <div class="container">
        <div class="footer-top-bg">
            <img src="{{asset('izanagi/img/footer-top-bg.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo text-white">
                    <img src="{{asset('izanagi/img/footer-logo.png')}}x" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget mb-5 mb-md-0">
                    <h4 class="fw-title">Latest Posts</h4>
                    <div class="latest-blog">
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{asset('izanagi/img/latest-blog/1.jpg')}}"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{asset('izanagi/img/latest-blog/2.jpg')}}"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                        <div class="lb-item">
                            <div class="lb-thumb set-bg" data-setbg="{{asset('izanagi/img/latest-blog/3.jpg')}}"></div>
                            <div class="lb-content">
                                <div class="lb-date">June 21, 2018</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
                                <a href="#" class="lb-author">By Admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h4 class="fw-title">Top Comments</h4>
                    <div class="top-comment">
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/1.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/2.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/3.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/4.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <ul class="footer-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="review.html">Games</a></li>
            <li><a href="categories.html">Blog</a></li>
            <li><a href="community.html">Forums</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Trang web được xay dựng bởi <i class="fa fa-heart-o" aria-hidden="true"></i> Ninja <a href="https://colorlib.com" target="_blank">Hirota</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
</footer>
<!-- Footer section end -->

<!--====== Javascripts & Jquery ======-->
<script src="{{asset('izanagi/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('izanagi/js/bootstrap.min.js')}}"></script>
<script src="{{asset('izanagi/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('izanagi/js/jquery.marquee.min.js')}}"></script>
<script src="{{asset('izanagi/js/main.js')}}"></script>
</body>
</html>
