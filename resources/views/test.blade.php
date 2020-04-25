<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('switcher/css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('switcher/css/style.css')}}"> <!-- Resource style -->
    <script src="{{asset('switcher/js/modernizr.js')}}"></script> <!-- Modernizr -->

    <title>Pricing Tables | CodyHouse</title>
</head>
<body>
<header class="cd-header">
    <h1>Trang quản lý Admin</h1>
</header>
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
        <li >
            <ul class="cd-pricing-wrapper">
                <li style="background-color: #dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Quản lý</h2>
                        <div class="cd-price">
                            {{--                            <span class="cd-currency">$</span>--}}
                            <span class="cd-value"> Game</span>
                            {{--                            <span class="cd-duration">mo</span>--}}
                        </div>
                    </header> <!-- .cd-pricing-header -->


                    <footer class="cd-pricing-footer">
                        <a class="cd-select" style="background-color: blue" href="" >Truy cập</a>
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
                            <li><em>Lần cập nhật:</em> </li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                </li>
            </ul> <!-- .cd-pricing-wrapper -->
        </li>

        <li class="cd-popular">
            <ul class="cd-pricing-wrapper">
                <li style="background-color:#dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2>Quản lý</h2>
                        <div class="cd-price">
                            <span class="cd-value">Blog</span>
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <footer class="cd-pricing-footer">
                        <a class="cd-select" href="">Truy cập</a>
                    </footer> <!-- .cd-pricing-footer -->
                </li>


                <li data-type="yearly" class="is-hidden">
                    <header class="cd-pricing-header">
                        <h2>Tổng quan Blog/Post</h2>

                        <div class="cd-price">
                        </div>
                    </header> <!-- .cd-pricing-header -->

                    <div class="cd-pricing-body">
                        <ul class="cd-pricing-features">
                            <li><em></em> Bài viết</li>
                            <li><em></em> Thông báo</li>
                            <li><em>Waiting</em> for update</li>
                            <li><em>Lần cập nhật:</em></li>
                        </ul>
                    </div> <!-- .cd-pricing-body -->

                </li>
            </ul> <!-- .cd-pricing-wrapper -->


        </li>

        <li>
            <ul  class="cd-pricing-wrapper">
                <li style="background-color: #dce3fb" data-type="monthly" class="is-visible">
                    <header class="cd-pricing-header">
                        <h2 >Quản lý</h2>

                        <div class="cd-price">
                            {{--                            <span class="cd-currency">$</span>--}}
                            <span  class="cd-value">Dòng máy</span>
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
<a href="" class="btn btn-primary" style="background-color: orangered">< Quay lại </a>
<script src="{{asset('switcher/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('switcher/js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>
