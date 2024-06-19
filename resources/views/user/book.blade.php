<h1>Danh sach cac quan sach</h1>
<table>
    @foreach($book as $item)
    <tr>
        <td>{{$item->book_id}}</td>
        <td>{{$item->book_name}}</td>
        <td>{{$item->price}}</td>
    </tr>
    @endforeach
</table>