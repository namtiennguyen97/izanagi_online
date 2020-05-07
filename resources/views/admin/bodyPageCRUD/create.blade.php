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
<form method="post" action="{{route('bodyPage.store')}}" enctype="multipart/form-data">
    @csrf
    Hint <input type="text" name="hint">
    Title <input type="text" name="title">
    Image <input type="file" name="image">
    Category
    <select name="categories_id">
        @foreach($blogCategories as $key => $value)
        <option value="{{$value->id}}">{{$value->type}}</option>
        @endforeach
    </select>
    <input type="submit">
</form>
</body>
</html>
