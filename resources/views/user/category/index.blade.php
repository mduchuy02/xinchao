<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/category" method="post">
        @csrf
        <input type="text" name="cat_id"><br>
        Ten loai: <input type="text" name="cat_name">
        <br>
        <input type="submit" value="Them">
    </form>
    <h1>Danh sach Category</h1>
    <table border=1>
        @foreach($c as $item)
        <tr>
            <td>{{$item->cat_id}}</td>
            <td>{{ $item->cat_name }}</td>
            <td>{{ $item->slug }}</td>

            <td>
                <a href="/category/{{ $item->cat_id }}">chi tiet</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>