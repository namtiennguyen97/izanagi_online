@extends('admin.layouts.master')
@section('content')

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
<form method="post" action="{{route('hint.store')}}">
    @csrf
{{--    <input name="title" type="text">--}}
    <select name="title">
        <option value="New">
            New
        </option>
        <option value="Note">
            Note
        </option>
        <option value="Alert">
            Alert
        </option>
    </select>
    <input name="content" type="text">
    <input type="submit">
</form>
    </div>
@stop

