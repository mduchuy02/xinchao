<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sửa category</h1>
    <form action="/category/update/{{ $data->cat_id }}" method="post">
       {{--post-put-delete--}}
        @csrf
        <input type="hidden" name="_method" value="PUT" >
        ID: <input type="text" name="cat_id" id="" value=" {{ $data->cat_id }}">
        <br> 
        Name: <input type="text" name="cat_name" id="" value="{{ $data->cat_name }}">
        <br>
        <input type="submit" value="Update">
    </form>
</body>
</html>