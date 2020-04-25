@extends('layouts.header')
@section('content')
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a>Thông tin tài khoản</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- end of logout bar -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert-dark">Chào mừng <a style="color: red"> {{\Illuminate\Support\Facades\Auth::user()->name}}</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Đăng nhập thành công!<br>
                    Hệ thống xác nhận thông tin đăng nhập với Email: <a style="color: darkgreen">{{\Illuminate\Support\Facades\Auth::user()->email}}</a><br>
                    <b>Izanagi Online xin chào {{\Illuminate\Support\Facades\Auth::user()->name}}<br> Hi vọng bạn sẽ đóng góp <br>
                        những thông tin cần thiết về game cho Izanagi Page.<br>
                    Hãy đọc nội quy ngắn của Web Izanagi và những quyền hạn người dùng. (Rule)</b><br>
                <button class="btn btn-success"><i  class="fa fa-exclamation-circle" aria-hidden="true"><a style="color: white" href="{{route('rules')}}">Rule</a></i>
                </button>
                        <button class="btn btn-danger" id="hide"><i class="fa fa-eye" aria-hidden="true"></i>
                        More</button>
                        <p id="show"><a>Dang xuat</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#hide").click(function () {
            $("#show").hide(1000);
        });
        if ($("#show").hide){
            $("#hide").click(function () {
                $("#show").show(1000);
            });
        }
    });
</script>
@endsection
