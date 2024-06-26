<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
    <meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
    <link href=" {{ url('assets1/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--  Free CSS Templates from www.templatemo.com -->
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="subpage.html">Search</a></li>
                <li><a href="subpage.html"> Books</a></li>
                <li><a href="subpage.html">New Releases</a></li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div> <!-- end of menu -->

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>25%</span> discounts for
                    purchase over $80
                </p>
                <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
            </div>


            <div id="templatemo_new_books">
                <ul>
                    <li>Suspen disse</li>
                    <li>Maece nas metus</li>
                    <li>In sed risus ac feli</li>
                </ul>
                <a href="subpage.html" style="margin-left: 50px;">Read more...</a>
            </div>
        </div> <!-- end of header -->

        <div id="templatemo_content">

            <div id="templatemo_content_left">
                <div class="templatemo_content_left_section">
                    <h1>Categories</h1>
                    <ul>
                        @foreach($loai as $item)
                        <li><a href="danh-muc/{{$item->slug}}.html">{{ $item->cat_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="templatemo_content_left_section">
                    <h1>Publisher</h1>
                    <ul>
                        @foreach($nxb as $nxb)
                        <li><a href="/nha-xuat-ban/{{ $nxb->pub_id }}">{{ $nxb->pub_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="templatemo_content_left_section">
                    <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
                </div>
            </div> <!-- end of content left -->

            <div id="templatemo_content_right">

                <!-- <div class="cleaner_with_width">&nbsp;</div>

                <div class="templatemo_product_box">
                    <h1>Cooking <span>(by New Author)</span></h1>
                    <img src="{{ url ('assets1/images/templatemo_image_02.jpg') }}" alt="image" />
                    <div class="product_info">
                        <p>Aliquam a dui, ac magna quis est eleifend dictum.</p>
                        <h3>$35</h3>
                        <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                        <div class="detail_button"><a href="subpage.html">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div> -->

                <!-- <div class="cleaner_with_height">&nbsp;</div>

                <div class="templatemo_product_box">
                    <h1>Gardening <span>(by Famous Author)</span></h1>
                    <img src="{{ url ('assets1/images/templatemo_image_03.jpg') }}" alt="image" />
                    <div class="product_info">
                        <p>Ut fringilla enim sed turpis. Sed justo dolor, convallis at.</p>
                        <h3>$65</h3>
                        <div class="buy_now_button"><a href="subpage.html">Buy Now</a></div>
                        <div class="detail_button"><a href="subpage.html">Detail</a></div>
                    </div>
                    <div class="cleaner">&nbsp;</div>
                </div> -->

                <!-- <div class="cleaner_with_width">&nbsp;</div> -->

                @yield('content')


                <div class="cleaner_with_height">&nbsp;</div>

                <a href="subpage.html"><img src="{{ url ('assets1/images/templatemo_ads.jpg') }}" alt="ads" /></a>
            </div> <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

        <div id="templatemo_footer">

            <a href="subpage.html">Home</a> | <a href="subpage.html">Search</a> | <a href="subpage.html">Books</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="#">Contact Us</a><br />
            Copyright © 2024 <a href="#"><strong>Your Company Name</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a>
        </div>
        <!-- end of footer -->
        <!--  Free CSS Template www.templatemo.com -->
    </div> <!-- end of container -->
</body>

</html>