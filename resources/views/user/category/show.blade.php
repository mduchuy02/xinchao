<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Chi tiet category</h1>
    {{ $s->cat_id }} <br>
    {{ $s->cat_name }}

    <hr>
    <a href="/category/edit/{{ $s->cat_id }}">Edit</a>

    <form action="/category/delete/{{ $s->cat_id }}" method="post">
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <input type="submit" value="Xoa">
    </form>
</body>

</html>