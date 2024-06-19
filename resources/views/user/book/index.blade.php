<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h2><a href="/book/create">Them moi</a></h2>
    <table border="1">
        @foreach($data as $item)
        <tr>
            <td>{{ $item->book_id }}</td>
            <td>{{ $item->book_name}} </td>
            <td>{{ $item->price }} </td>
        </tr>
        @endforeach
    </table>
    {{$data->links()}}
</body>

</html>