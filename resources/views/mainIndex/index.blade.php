<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Izanagi Online Việt Nam</title>
    <meta charset="UTF-8">
    <meta name="description" content="Izanagi Online-Hirota">
    <meta name="keywords" content="warrior, game, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    {{--    <base href="{{asset('izanagi/')}}">--}}
    <link href="{{asset('izanagi/img/2bchibi.ico')}}" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('izanagi/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('izanagi/css/animate.css')}}"/>


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('switcher/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('switcher/css/style.css')}}"> <!-- Resource style -->
    <script src="{{asset('switcher/js/modernizr.js')}}"></script> <!-- Modernizr -->


</head>
<body>
<script src="{{asset('switcher/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('switcher/js/main.js')}}"></script> <!-- Resource jQuery -->
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a class="site-logo" href="{{route('main.index')}}">
            <img src="{{asset('izanagi/img/rpg-izanagi-online-mmorpg_icon.jpeg')}}" style="width: 15%; height: 10%"
                 alt="">
        </a>
        @if (Route::has('login'))
            <div class="user-panel">
                @auth
                    <img src="" width="5%">
                    <a href="{{ route('detail.profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                @else
                    <a href="{{route('login')}}">Đăng nhập</a>  /  @if (Route::has('register')) <a
                        href="{{route('register')}}">Đăng kí</a>
                    @endif
                @endauth
            </div>
    @endif

    <!-- responsive -->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <!-- site menu -->
        <nav class="main-menu">
            <ul>
                <li><a href="{{route('main.index')}}">Trang chủ</a></li>
                <li><a href="review.html">Diễn đàn</a></li>
                <li><a href="categories.html">Thông tin</a></li>
                <li><a href="community.html">Forums</a></li>
                <li><a href="{{route('admin.page')}}">Admin</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header section end -->


<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('izanagi/img/Izanagi-Online.jpg')}}">
            <div class="hs-text">
                <div class="container">
                    <h2>Chào mừng đến với<span><br>Izanagi Online Việt Nam</span></h2>
                    <p>Nơi hội tụ những Ninja VN, hãy đăng nhập ngay!<br></p>
                    <a href="{{route('login')}}" class="site-btn">Đăng nhập</a>
                </div>
            </div>
        </div>

        <div class="hs-item set-bg" data-setbg="{{asset('izanagi/img/screen-1.jpg')}}">
            <div class="hs-text">
                <div class="container">
                    <h2>Tựa game <span>Ninja-Samurai</span></h2>
                    <p>Hoá thân thành một trong những Ninja-Samurai<br> khám phá và chinh phục thử thách.</p>
                    <a href="#" class="site-btn">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('izanagi/img/screen-2.jpg')}}">
            <div class="hs-text">
                <div class="container">
                    <h2>Class <span>Đa dạng</span>và chân thực</h2>
                    <p>Lựa chọn môn phái phù hợp và cùng đồng đội chiến đấu.<br> Tạo dựng guild cho riêng mình.</p>
                    <a href="#" class="site-btn">Xem thêm</a>
                </div>
            </div>
        </div>

        <div class="hs-item set-bg" data-setbg="{{asset('izanagi/img/screen-3.jpg')}}">
            <div class="hs-text">
                <div class="container">
                    <h2>Tự do<span>chiến đấu!</span></h2>
                    <p>Với hệ thống trang bị đa dạng,<br> cũng như cách build mới mẻ,<br>bạn có thể chiến đấu theo phong
                        cách riêng</p>
                    <a href="#" class="site-btn">Xem thêm</a>
                </div>
            </div>
        </div>

        <div class="hs-item set-bg" data-setbg="{{asset('izanagi/img/screen-0.jpg')}}">
            <div class="hs-text">
                <div class="container">
                    <h2>Tuỳ chỉnh <span>Ninja</span><br>theo phong cách của bạn!</h2>
                    <p>Tạo và tuỳ chỉnh Ninja theo phong cách của bạn <br>.</p>
                    <a href="#" class="site-btn">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<!-- Latest news section -->
<div class="latest-news-section">
    <div class="ln-title">Thông báo</div>
    <div class="news-ticker">
        <div class="news-ticker-contant">
            @foreach($hint as $key => $value)
            <div class="nt-item"><span class="@if($value->title == 'New') new @elseif($value->title == 'Note')strategy @elseif($value->title == 'Alert') racing @endif">{{$value->title}}</span>{{$value->content}}
            </div>
{{--            <div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit.--}}
{{--            </div>--}}
{{--            <div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit.--}}
{{--            </div>--}}
            @endforeach
        </div>

    </div>
</div>
<!-- Latest news section end -->

<div class="cd-pricing-container">
    <div class="cd-pricing-switcher">
        <p class="fieldset">
            <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
            <label for="monthly-1">QL Chính</label>
            <input type="radio" name="duration-1" value="yearly" id="yearly-1">
            <label for="yearly-1">Chi tiết</label>
            <span class="cd-switch"></span>
        </p>
    </div> <!-- .cd-pricing-switcher -->

    <ul class="cd-pricing-list cd-bounce-invert">
        <li>
            <ul class="cd-pricing-wrapper">
                <li style="background-color: #dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Thông tin</h2>
                        <div class="cd-price">
{{--                            <img src="{{asset('izanagi/img/cleric.jpg')}}">--}}
{{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value"> Blog</span>
                            <span class="cd-duration">mo</span>
                        </div>
                    </header> <!-- .cd-pricing-header -->


                    <footer class="cd-pricing-footer">
                        <a class="cd-select" style="background-color: blue" href="">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>


                <li data-type="yearly" class="is-hidden ">
                    <header class="cd-pricing-header">
                        <h2>Tổng quan Shop Game</h2>

                        <div class="cd-price">
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>Hiện có: </em> Sản phẩm</li>
                            <li><em>Hãng Sony:</em></li>
                            <li><em>Hãng Xbox:</em> Updating</li>
                            <li><em>Lần cập nhật:</em></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>

        <li class="cd-popular">
            <ul class="cd-pricing-wrapper">
                <li style="background-color:#dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Tổng quan</h2>
                        <div class="cd-price">
{{--                            <img src="{{asset('izanagi/img/mage.jpg')}}">--}}
                            <span class="cd-value">Items</span>

                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="{{route('items.index')}}">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>


                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Game</h2>
                        <div class="cd-price">
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em></em>Số Item:{{count($item)}}</li>
                            <li><em></em> Thông báo</li>
                            <li><em>Waiting</em> for update</li>
                            <li><em>Lần cập nhật:</em></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>

        <li>
            <ul class="cd-pricing-wrapper">
                <li style="background-color: #dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Tổng quan</h2>
{{--                        <img src="{{asset('izanagi/img/cleric.jpg')}}">--}}
                        <div class="cd-price">
{{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value">Game</span>
{{--                            <span class="cd-duration">mo</span>--}}
                        </div>
                    </header> <!-- .cd-pricing-header -->
                    <footer class="cd-pricing-footer">
                        <a class="cd-select" style="background-color: green" href="">Truy cập</a>
                    </footer>  <!-- .cd-pricing-footer -->
                </li>

                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Tổng quan phụ kiện</h2>
                        <div class="cd-price">
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em>Hiện có:</em> Phụ kiện/Dòng máy</li>
                            <li><em>Waiting</em> for update</li>
                            <li><em>Waiting</em> for update</li>
                            <li><em>Lần cập nhật:</em></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->
                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>
    </ul> <!-- .cd-pricing-list -->
</div> <!-- .cd-pricing-container -->

<!-- Feature section -->
<section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 p-0">
                <div class="feature-item set-bg" data-setbg="{{asset('izanagi/img/assasin.jpg')}}">
                    <span class="cata new">Assasin</span>
                    <div class="fi-content text-white">
                        <h5><a href="#">Một class cơ động,có thể né tránh cũng như phản công rất tốt.</a></h5>
                        <p>Vai trò chủ đạo: Dame chính/Dọn dẹp</p>
                        <a href="#" class="fi-comment">3 Comments</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="feature-item set-bg" data-setbg="{{asset('izanagi/img/mage.jpg')}}">
                    <span class="cata strategy">Mage</span>
                    <div class="fi-content text-white">
                        <h5><a href="#">Justo tempor, rutrum erat id, molestie</a></h5>
                        <p>Vai trò chủ đạo: Cân bằng/Buff/Dọn dẹp</p>
                        <a href="#" class="fi-comment">3 Comments</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="feature-item set-bg" data-setbg="{{asset('izanagi/img/cleric.jpg')}}">
                    <span class="cata new">Cleric</span>
                    <div class="fi-content text-white">
                        <h5><a href="#">Nullam lacinia ex eleifend orci porttitor</a></h5>
                        <p>Vai trò chủ đạo:. </p>
                        <a href="#" class="fi-comment">3 Comments</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 p-0">
                <div class="feature-item set-bg" data-setbg="{{asset('izanagi/img/warrior.jpg')}}">
                    <span class="cata racing">Warrior</span>
                    <div class="fi-content text-white">
                        <h5><a href="#">Lacinia ex eleifend orci suscipit</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="#" class="fi-comment">3 Comments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Feature section end -->


<!-- Recent game section  -->
<section class="recent-game-section spad set-bg" data-setbg="{{asset('izanagi/img/maintheme.jpg')}}">
    <div class="container">
        <div class="section-title">
            <div class="cata new">new</div>
            <h2>Recent Games</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="recent-game-item">
                    <div class="rgi-thumb set-bg" data-setbg="{{asset('izanagi/img/recent-game/1.jpg')}}">
                        <div class="cata new">new</div>
                    </div>
                    <div class="rgi-content">
                        <h5>Suspendisse ut justo tem por, rutrum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur
                            elit. </p>
                        <a href="#" class="comment">3 Comments</a>
                        <div class="rgi-extra">
                            <div class="rgi-star"><img src="{{asset('izanagi/img/icons/star.png')}}" alt=""></div>
                            <div class="rgi-heart"><img src="{{asset('izanagi/img/icons/heart.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recent-game-item">
                    <div class="rgi-thumb set-bg" data-setbg="{{asset('izanagi/img/recent-game/2.jpg')}}">
                        <div class="cata racing">racing</div>
                    </div>
                    <div class="rgi-content">
                        <h5>Susce pulvinar metus nulla, vel facilisis sem </h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur
                            elit. </p>
                        <a href="#" class="comment">3 Comments</a>
                        <div class="rgi-extra">
                            <div class="rgi-star"><img src="{{asset('izanagi/img/icons/star.png')}}" alt=""></div>
                            <div class="rgi-heart"><img src="{{asset('izanagi/img/icons/heart.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="recent-game-item">
                    <div class="rgi-thumb set-bg" data-setbg="{{asset('izanagi/img/recent-game/3.jpg')}}">
                        <div class="cata adventure">Adventure</div>
                    </div>
                    <div class="rgi-content">
                        <h5>Suspendisse ut justo tem por, rutrum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur
                            elit. </p>
                        <a href="#" class="comment">3 Comments</a>
                        <div class="rgi-extra">
                            <div class="rgi-star"><img src="{{asset('izanagi/img/icons/star.png')}}" alt=""></div>
                            <div class="rgi-heart"><img src="{{'izanagi/img/icons/heart.png'}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent game section end -->


<!-- Tournaments section -->
<section class="tournaments-section spad">
    <div class="container">
        <div class="tournament-title">Tournaments</div>
        <div class="row">
            <div class="col-md-6">
                <div class="tournament-item mb-4 mb-lg-0">
                    <div class="ti-notic">Premium Tournament</div>
                    <div class="ti-content">
                        <div class="ti-thumb set-bg" data-setbg="{{asset('izanagi/img/tournament/1.jpg')}}"></div>
                        <div class="ti-text">
                            <h4>World Of WarCraft</h4>
                            <ul>
                                <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                <li><span>Tounament Ends:</span> July 01, 2018</li>
                                <li><span>Participants:</span> 10 teams</li>
                                <li><span>Tournament Author:</span> Admin</li>
                            </ul>
                            <p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tournament-item">
                    <div class="ti-notic">Premium Tournament</div>
                    <div class="ti-content">
                        <div class="ti-thumb set-bg" data-setbg="{{asset('izanagi/img/tournament/2.jpg')}}"></div>
                        <div class="ti-text">
                            <h4>DOOM</h4>
                            <ul>
                                <li><span>Tournament Beggins:</span> June 20, 2018</li>
                                <li><span>Tounament Ends:</span> July 01, 2018</li>
                                <li><span>Participants:</span> 10 teams</li>
                                <li><span>Tournament Author:</span> Admin</li>
                            </ul>
                            <p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tournaments section bg -->


<!-- Review section -->
<section class="review-section spad set-bg" data-setbg="{{asset('izanagi/img/digitalninja.jpg')}}">
    <div class="container">
        <div class="section-title">
            <div class="cata new">new</div>
            <h2>Recent Reviews</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{asset('izanagi/img/review/1.jpg')}}">
                        <div class="score yellow">9.3</div>
                    </div>
                    <div class="review-text">
                        <h5>Assasin’’s Creed</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{asset('izanagi/img/review/2.jpg')}}">
                        <div class="score purple">9.5</div>
                    </div>
                    <div class="review-text">
                        <h5>Doom</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{asset('izanagi/img/review/3.jpg')}}">
                        <div class="score green">9.1</div>
                    </div>
                    <div class="review-text">
                        <h5>Overwatch</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="review-item">
                    <div class="review-cover set-bg" data-setbg="{{asset('izanagi/img/review/4.jpg')}}">
                        <div class="score pink">9.7</div>
                    </div>
                    <div class="review-text">
                        <h5>GTA</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Review section end -->


<!-- Footer top section -->
<section class="footer-top-section">
    <div class="container">
        <div class="footer-top-bg">
            <img src="{{asset('izanagi/img/katana.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo text-white">
                    <img src="{{asset('izanagi/img/footer-logo.png')}}x" alt="">
                    <p></p>
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
                                <p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/2.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/3.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                        <div class="tc-item">
                            <div class="tc-thumb set-bg" data-setbg="{{asset('izanagi/img/authors/4.jpg')}}"></div>
                            <div class="tc-content">
                                <p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
                                <div class="tc-date">June 21, 2018</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer top section end -->


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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            Trang web được xây dựng <i class="fa fa-heart-o" aria-hidden="true"></i> bởi <a href="https://colorlib.com"
                                                                                            target="_blank">Hirota</a>
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
