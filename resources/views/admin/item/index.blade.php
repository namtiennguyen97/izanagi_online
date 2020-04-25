@extends('admin.layouts.master')
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
                                    <th style="text-align: center">Name</th>
                                    <th style="text-align: center">Stats</th>
                                    <th style="text-align: center">Image</th>
                                    <th style="text-align: center">Type</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                                @foreach($item as $key => $value)
                                    <tr>
                                        <td style="text-align: center">{{$value->name}}</td>
                                        <td style="text-align: center">{{$value->stats}}</td>
                                        <td style="text-align: center"><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"></td>
                                        <td style="text-align: center">{{$value->type}}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm"><a
                                                    href="{{route('items.destroy',$value->id)}}" id="delete"><i
                                                        style="color: white" class="fa fa-trash"></i></a></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-success btn-sm"><a
                                                    href="{{route('items.edit',$value->id)}}"><i
                                                        style="color: white" class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i></a></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <a  class="btn btn-primary" id="addItem">Add</a>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <div id="showAddItem">
<!-- show here-->
    </div>
@stop

