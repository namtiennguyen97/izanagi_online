@extends('layouts.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Stats</th>
            <th scope="col">Image</th>
            <th scope="col">Type</th>
            <th scope="col">Upload by</th>
        </tr>
        </thead>
        <tbody>
        @if(count($blog)==0)
            <td colspan="4">Khong co du lieu</td>
        @else
            @foreach($blog as $key => $value)
                <tr>
                    <th scope="row">{{$value->title}}</th>
                    <td>{{$value->content}}</td>
                    <td><img src="{{asset("storage/".$value->image)}}" style="width: 90px;height: 90px"></td>
                    <td>{{$value->type}}</td>
                    <td>{{$value->user->name}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection

