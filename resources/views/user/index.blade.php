@extends('user.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">User Management</h3>
                            <div class="col-12">
                                @if(Session::has('success'))
                                    <p class="text-success">
                                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                                    </p>
                                @endif
                            </div>
                            <form action="" method="get">
                                @csrf
                                <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                        <input type="text" name="keyword" class="form-control pull-right"
                                               placeholder="Search">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">Username</th>
                                    <th style="text-align: center">Status</th>
                                    {{--                                    <th style="text-align: center">Avatar</th>--}}
                                    {{--                                    <th style="text-align: center">Gender</th>--}}
                                    <th style="text-align: center">Email</th>
                                    <th style="text-align: center">Role</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
{{--                                @foreach($user as $key => $value)--}}
{{--                                    <tr>--}}
{{--                                        <td style="text-align: center">{{$value->id}}</td>--}}
{{--                                        <td style="text-align: center">{{$value->name}}</td>--}}
{{--                                        <td style="text-align: center">@if(Auth::check())<a>Online</a> @else<a>Offline</a>@endif</td>--}}
{{--                                        --}}{{--                                        <td style="text-align: center"><img src="{{asset("storage/".$value->avatar)}}"--}}
{{--                                        --}}{{--                                                                            style="width: 10%; height: 3%"></td>--}}
{{--                                        --}}{{--                                        <td>@if($value->gender == 0) <a>Male</a> @elseif($value->gender ==1)--}}
{{--                                        --}}{{--                                                <a>Female</a> @elseif($value->gender == 2 || $value->gender ==3)--}}
{{--                                        --}}{{--                                                <a>N/A</a>@endif</td>--}}
{{--                                        <td style="text-align: center">{{$value->email}}</td>--}}
{{--                                        <td style="text-align: center">--}}
{{--                                            <span class="label label-success">@if($value->role ==1)<a style="color: white">Admin</a> @elseif($value->role == 2)<a style="color: white">User</a>@elseif($value->role == 3)<a style="color: white">Librarian</a>@endif</span></td>--}}
{{--                                        <td>--}}

{{--                                            <button class="btn btn-danger btn-sm"><a--}}
{{--                                                    href="" id="delete"><i--}}
{{--                                                        style="color: white" class="fa fa-trash"></i></a></button>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <button class="btn btn-success btn-sm"><a--}}
{{--                                                    href=""><i--}}
{{--                                                        style="color: white" class="fa fa-pencil-square-o"--}}
{{--                                                        aria-hidden="true"></i></a></button>--}}
{{--                                        </td>--}}

{{--                                    </tr>--}}
{{--                                @endforeach--}}
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <a href="" id="abc">Switch</a>
            <div id="result">
                <p>here</p>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@stop

