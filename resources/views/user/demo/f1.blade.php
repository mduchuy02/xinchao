<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach($data as $item)
    <h2>{{ $item->book_name }}</h2>
    <p>{{!! $item->description !!}}</p>
    @endforeach
</body>

</html>