@extends('layout.layout2')

@section('title')
Trang F3
@endsection

@section('content')
<style>
    .templatemo_product_box img {
        width: 70px;
        height: 95px;
    }
</style>
@foreach($data as $item)
<div class="templatemo_product_box">
    <h1>{{ $item->book_name }} <span>(by Japanese Name)</span></h1>
    <img src="{{ url ('assets1/images/book') }}/{{ $item->img }}" alt="image" />
    <div class="product_info">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <h3>$45</h3>
        <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
        <div class="detail_button"><a href="subpage.html">Detail</a></div>
    </div>
    <div class="cleaner">&nbsp;</div>
</div>
@endforeach
@endsection