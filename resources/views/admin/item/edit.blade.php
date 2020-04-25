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
<form method="post" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
    @csrf
    <input type="text" value="{{$item->name}}" name="name">
    <input type="text" name="stats" value="{{$item->stats}}">
    <input type="file" name="image">
    <input type="text" name="type" value="{{$item->type}}">
    <input type="submit">
</form>

</body>
</html>
