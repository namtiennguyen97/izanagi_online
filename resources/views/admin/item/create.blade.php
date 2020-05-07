@extends('admin.cnd.cnd')
@section('content')
<form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
    @csrf
        <input name="title" type="text">
   <input type="text" name="name">
    <input type="text" name="stats">
    <input type="file" name="image">
    <input type="text" name="type">
    <input type="submit">
</form>
    @endsection


