<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/pub" method="post">
        ID: <input type="text" name="pub_id"> <br>
        Name: <input type="text" name="pub_name"> <br>
        @csrf
        <input type="submit" value="Them">
        @foreach($data as $item)
        <div>
            {{$item->pub_id}} - {{$item->pub_name}}
        </div>
        @endforeach
    </form>

</body>

</html>