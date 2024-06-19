<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Them moi</h1>
    <form action="" method="post">
        Ma sach: <input type="text" name="book_id"><br>
        Ten sach: <input type="text" name="book_name"> <br>
        Mo ta <textarea name="description" id="" cols="30" rows="10"></textarea><br>
        Gia: <input type="text" name="price"><br>
        <input type="file" name="img"> <br>
        Loai: <select name="" id="">
            @foreach($loai as $item)
            <option value="{{ $item->cat_id }}">{{ $item->cat_name}}</option>
            @endforeach
        </select>
        Nha xuat ban: <select name="" id="">
            @foreach($nxb as $item)
            <option value="{{ $item->pub_id }}">{{ $item->pub_name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Them">
    </form>
</body>

</html>