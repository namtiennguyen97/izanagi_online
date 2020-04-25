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
<form method="post" action="{{route('hint.update',$hint->id)}}">
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
    <input name="content" value="{{$hint->content}}" type="text">
    <input type="submit">
</form>

</body>
</html>
