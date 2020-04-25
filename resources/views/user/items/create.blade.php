<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('user.items.store')}}" enctype="multipart/form-data">
    @csrf
    {{--    <input name="title" type="text">--}}
    <input type="text" name="name">
    <input type="text" name="stats">
    <input type="file" name="image">
    <select name="type_items">
        @foreach($category as $item => $value)
        <option value="{{$value->id}}">{{$value->type}}</option>
        @endforeach
    </select>
    <input type="submit">
</form>

</body>
</html>
