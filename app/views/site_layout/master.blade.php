<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sunshine - Responsive Hotel Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    {{ HTML::style('css/main.css') }}
    <!-- LOAD JS FILES -->
<!--    {{ HTML::style('public/css/index.css') }}-->
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/jquery.isotope.min.js') }}
    {{ HTML::script('js/jquery.prettyPhoto.js') }}
    {{ HTML::script('js/easing.js') }}
    {{ HTML::script('js/jquery.lazyload.js') }}
    {{ HTML::script('js/jquery.ui.totop.js') }}
    {{ HTML::script('js/selectnav.js') }}
    {{ HTML::script('js/ender.js') }}
    {{ HTML::script('js/custom.js') }}
    {{ HTML::script('js/responsiveslides.min.js') }}
    {{ HTML::script('js/datepickr.js') }}
    <script>
        jQuery(function() {
            new datepickr('checkin');
        });
        jQuery(function() {
            new datepickr('checkout');
        });
    </script>
</head>

<body>
<!-- header begin -->
<header>
    <div id="logo">
        <div class="inner">
            <a href="{{URL::to('index.html')}}"><img src={{asset('img/logo.png')}} alt="Logo"></a>
        </div>
    </div>


    <!-- mainmenu begin -->
    <div id="mainmenu-container">
        <ul id="mainmenu">
            <li><a href="{{URL::to('index.html')}}">Home</a></li>
            <li><a href="{{URL::to('index.html')}}">ROOM</a>
                <ul>
                    <li><a href="{{URL::to('room-list.html')}}">Room List</a></li>
                    <li><a href="{{URL::to('room-details.html')}}">Room Details</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('booking.html')}}">Booking</a></li>
            <li><a href="{{URL::to('index.html')}}">News</a>
                <ul>
                    <li><a href="{{URL::to('news.html')}}">News List</a></li>
                    <li><a href="{{URL::to('single-news.html')}}">Single News</a></li>
                </ul>
            </li>
            <li><a href="{{URL::to('fullwidth.html')}}">Fullwidth</a></li>
            <li><a href="{{URL::to('gallery.html')}}">Gallery</a></li>
            <li><a href="{{URL::to('contact.html')}}">Contact</a></li>
        </ul>
    </div>

</header>
<!-- header close -->

<!-- slider -->
<div id="slider">
    <div class="callbacks_container">
        <ul class="rslides pic_slider">
            <li>
                <img src="img/slider-home/pic&#32;(1).jpg" alt="">
                <div class="slider-info">
                    <h1>Welcome to Sunshine Hotel and Resorts</h1>
                </div>
            </li>
            <li>
                <img src="img/slider-home/pic&#32;(2).jpg" alt="">
                <div class="slider-info">
                    <h1>It's our way to make you feel more than home</h1>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- slider close -->

<div class="clearfix"></div>

<!-- search begin -->
<div id="booking">
    <div class="container">
        <div class="row">
            <span class="span2">Booking Now:</span>
            <form class="form-inline">
                <div class="span2">
                    <input type="text" id="checkin" value="Check In Date">
                </div>
                <div class="span2">
                    <input type="text" id="checkout" value="Check Out Date">
                </div>
                <div class="span2">
                    <select>
                        <option>Select Room</option>
                        <option>Deluxe Room </option>
                        <option>Elegant Room</option>
                        <option>luxury Room</option>
                    </select>
                </div>
                <div class="span2">
                    <select>
                        <option>Number of Guests</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>5+</option>
                    </select>
                </div>
                <div class="span2">
                    <a href="{{URL::to('index.html')}}" class="btn btn-pimary btn-submit">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- search close -->

<!-- content begin -->
<div id="content">
    <div class="container">

        <div class="row">
            <div class="text-center">
                <h2>Favorite Rooms</h2>
                Find your favorite room, feel more than home<br><br>
            </div>

            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="{{URL::to('booking.html')}}" class="btn-book">Book Now</a>
                </div>
                <img data-original="img/room-1.jpg" src="{{asset('img/pic-blank-1.gif')}} " class="img-polaroid" alt="">
                <h4>Deluxe Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>

                    </ul>
                </div>
            </div>
            <!-- close room -->

            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="booking.html" class="btn-book">Book Now</a>
                </div>
                <img data-original="img/room-2.jpg" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                <h4>Elegant Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                    </ul>
                </div>
            </div>
            <!-- close room -->


            <!-- room -->
            <div class="room span4">
                <div class="btn-book-container">
                    <a href="booking.html" class="btn-book">Book Now</a>
                </div>
                <img data-original="img/room-3.jpg" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                <h4>Luxury Room</h4>
                <div class="description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
                <div class="row">
                    <ul class="room-features">
                        <li class="span2"><i class="icon-check-sign"></i>Kingsize Bed</li>
                        <li class="span2"><i class="icon-check-sign"></i>Mountain View</li>
                        <li class="span2"><i class="icon-check-sign"></i>Hotspot and TV Cable</li>
                        <li class="span2"><i class="icon-check-sign"></i>Free Lunch and Dinner</li>
                    </ul>
                </div>

            </div>
            <!-- close room -->


        </div>

        <hr>

        <div class="row gallery">
            <div class="text-center">
                <h2>Hotel Gallery</h2>
                Find your favorite room, feel more than home<br><br>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('../img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('../img/gallery/pic%20(1).jpg') }}" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('../img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('../img/gallery/pic%20(2).jpg') }}" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('../img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('img/gallery/pic%20(3).jpg') }}" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('img/gallery/pic%20(4).jpg') }}" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('../img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('../img/gallery/pic%20(5).jpg') }}" src="img/pic-blank-1.gif" class="img-polaroid" alt="">
                </a>
            </div>

            <div class="span2">
                <a class="preview" href="{{ asset('../img/gallery/pic&#32;(1).jpg') }}" rel="prettyPhoto" title="Your Title">
                    <img data-original="{{ asset('../img/gallery/pic%20(6).jpg') }}" src="{{asset('img/pic-blank-1.gif')}}" class="img-polaroid" alt="">
                </a>
            </div>

        </div>

        <hr>

        <div class="row">
            <div class="span3 feature">
                <i class="icon-desktop icon-3x"></i><br>
                <h4>Modern</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-calendar icon-3x"></i><br>
                <h4>Responsive</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-circle-arrow-right icon-3x"></i><br>
                <h4>Hotel</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>

            <div class="span3 feature">
                <i class="icon-thumbs-up icon-3x"></i><br>
                <h4>Template</h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>


    </div>

</div>
<!-- content close -->

<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row">
            <div class="span3">
                <img src="{{ asset('img/logo-2.png') }}" alt="">
            </div>
            <div class="span3">
                <h3>About Us</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div class="span3">
                <h3>Latest News</h3>
                <ul class="list-news">
                    <li>
                        <img src="{{ asset('img/thumbnail-1.jpg') }}" alt=""/>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</div>
                    </li>
                    <li>
                        <img src="{{ asset('img/thumbnail-1.jpg') }}" alt=""/>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</div>
                    </li>
                </ul>
            </div>
            <div class="span3">
                <h3>Our Address</h3>
                <address>
                    80 Gotham Street, Sydney
                    <span><strong>Phone:</strong>(208) 222 4546</span>
                    <span><strong>Fax:</strong>(208) 222 4647</span>
                    <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                    <span><strong>Web:</strong><a href="index.html#test">http://example.com</a></span>
                </address>

                <div class="social-icons">
                    <a href="index.html#"><img src="{{ asset('img/social-icons/rss.png') }}" alt=""/></a>
                    <a href="index.html#"><img src="{{ asset('img/social-icons/facebook.png') }}" alt=""/></a>
                    <a href="index.html#"><img src="{{ asset('img/social-icons/twitter.png') }}" alt=""/></a>
                    <a href="index.html#"><img src="{{ asset('img/social-icons/gplus.png') }}" alt=""/></a>
                    <a href="index.html#"><img src="{{ asset('img/social-icons/youtube.png') }}" alt=""/></a>
                    <a href="index.html#"><img src="{{ asset('img/social-icons/vimeo.png') }}" alt=""/></a>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyiright 2013 - Sunshine by Aveothemes
                </div>
                <div class="span6">
                    <nav>
                        <ul>
                            <li><a href="index.html#">Home</a></li>
                            <li><a href="index.html#">Room</a></li>
                            <li><a href="index.html#">Booking</a></li>
                            <li><a href="index.html#">News</a></li>
                            <li><a href="index.html#">Gallery</a></li>
                            <li><a href="index.html#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- footer close -->

</body>
</html>
