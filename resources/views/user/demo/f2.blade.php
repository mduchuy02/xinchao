@extends('layout/layout1')

@section('tieude')
Trang F2
@endsection

@section('noidung')
<table class="table table-bordered table-striped table-hover">
    @foreach($data as $r)
    <tr>
        <td>{{ $r->book_id }}</td>
        <td> {{ $r->book_name }}</td>
        <td> {{ $r->price }}</td>
        <td>#</td>
    </tr>
    @endforeach
</table>
@endsection