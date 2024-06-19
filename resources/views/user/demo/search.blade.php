<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Tên: <input type="text" name="key" value="{{ $key }}">
        <br>
        Giá cao: <input type="number" name="gia" value="{{ $gia }}">
        <br>
        <input type="submit" value="Tìm kiếm">
    </form>

    <hr> Kết quả
    <table>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->book_id }}</td>
            <td>{{ $item->book_name }}</td>
            <td>{{ number_format($item->price) }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>