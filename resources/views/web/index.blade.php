@extends('web.partials.master')
@section('content')
<!-- slider goes here -->



<div class="fullwidth-slider">
    <div id="headerslider" class="carousel slide"> 
        <ol class="carousel-indicators">
            <li data-target="#headerslider" data-slide-to="0" class="active"></li>
            <li data-target="#headerslider" data-slide-to="1"></li>
            <li data-target="#headerslider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="fill" data-bg-image="{{asset('public/photoes/header.png')}}">
                 <div class="bs-slider-overlay"></div>
                    <div class="container movie-slider-container"> 
                        <div class="row">
                             <div class="col-sm-12 movie-slider-content"> 
                                <div class="slider-content" >
                                    <ul class="subtitle"  data-animation="animated bounceInRight">
                                        <li>Action</li>
                                        <li>Science Fiction</li>
                                        <li>Adventure</li>
                                    </ul>
                                    <div class="title" data-animation="animated bounceInRight" >Lord of the rings: The return of the kings <i>(2017)</i></div>
                                    <div class="slide_right" data-animation="animated bounceInRight">
                                        <a href="javascript:;" class="btn-trailer">watch trailer</a> <a href="javascript:;" class="btn-ticket">buy ticket</a>
                                        <ul class="award-logo">
                                            <li><img src="{{asset('public/photoes/icon1.png')}}" alt="icon" ></li>
                                            <li><img src="{{asset('public/photoes/icon2.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon3.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon4.png')}}" alt="icon"></li>
                                        </ul>
                                    </div>
                                    <div class="chart-cirle">
                                        <div class="chart-circle-l" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="64" data-text="6.4" >
                                            </div>
                                            <span>IMDB Ratffing</span>
                                        </div>
                                        <div class="chart-circle-r" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="84" data-text="8.4" >
                                            </div>
                                            <span>Rotten Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" data-bg-image="{{asset('/public/photoes/feature-item.jpg')}}">
                 <div class="bs-slider-overlay"></div>
                    <div class="container movie-slider-container"> 
                        <div class="row">
                             <div class="col-sm-12 movie-slider-content"> 
                                <div class="slider-content" >
                                    <ul class="subtitle"  data-animation="animated bounceInRight">
                                        <li>Action</li>
                                        <li>Science Fiction</li>
                                        <li>Adventure</li>
                                    </ul>
                                    <div class="title" data-animation="animated bounceInRight" >The Battle of Algiers (La Battaglia)  <i>(1967)</i></div>
                                    <div class="slide_right" data-animation="animated bounceInRight">
                                        <a href="javascript:;" class="btn-trailer">watch trailer</a> <a href="javascript:;" class="btn-ticket">buy ticket</a>
                                        <ul class="award-logo">
                                            <li><img src="{{asset('public/photoes/icon1.png')}}" alt="icon" ></li>
                                            <li><img src="{{asset('public/photoes/icon2.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon3.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon4.png')}}" alt="icon"></li>
                                        </ul>
                                    </div>
                                    <div class="chart-cirle">
                                        <div class="chart-circle-l" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="94" data-text="9.4">
                                            </div>
                                            <span>IMDB Ratffing</span>
                                        </div>
                                        <div class="chart-circle-r" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="84" data-text="8.4">
                                            </div>
                                            <span>Rotten Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="fill" data-bg-image="{{asset('public/photoes/header.png')}}">
                 <div class="bs-slider-overlay"></div>
                    <div class="container movie-slider-container"> 
                        <div class="row">
                             <div class="col-sm-12 movie-slider-content"> 
                                <div class="slider-content" >
                                    <ul class="subtitle"  data-animation="animated bounceInRight">
                                        <li>Action</li>
                                        <li>Science Fiction</li>
                                    </ul>
                                    <div class="title" data-animation="animated bounceInRight" >The Battle of Algiers (Di Algeri)<i>(1967)</i></div>
                                    <div class="slide_right" data-animation="animated bounceInRight">
                                        <a href="javascript:;" class="btn-trailer">watch trailer</a> <a href="javascript:;" class="btn-ticket">buy ticket</a>
                                        <ul class="award-logo">
                                           <li><img src="{{asset('public/photoes/icon1.png')}}" alt="icon" ></li>
                                            <li><img src="{{asset('public/photoes/icon2.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon3.png')}}" alt="icon"></li>
                                            <li><img src="{{asset('public/photoes/icon4.png')}}" alt="icon"></li>
                                        </ul>
                                    </div>
                                    <div class="chart-cirle" data-animation="animated bounceInUp">
                                        <div class="chart-circle-l" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="86" data-text="8.6">
                                            </div>
                                            <span>IMDB Ratffing</span>
                                        </div>
                                        <div class="chart-circle-r" data-animation="animated bounceInUp">
                                            <div class="circle-chart" data-circle-width="7" data-percent="74" data-text="7.4">
                                            </div>
                                            <span>Rotten Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="carousel-control left" href="#headerslider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control right" href="#headerslider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>  
</div>
<!--End Slider  -->

<!-- Start Latest Movies -->
  <div class="container-fluid pv11 ">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="heading text-center">Latest Movies</h3>
                        <div class="ticket-carousel pvt85">
                            <div class="swiper-container carousel-container movie-images" data-col="5">
                                <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-1.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-2.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-3.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-4.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-5.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-6.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                    </div>
                </div>
            </div> 

<!-- End Latest movies -->

<!-- Start Latest Tv-Shows -->
<div class="container-fluid pv11 ">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="heading text-center">Latest TV-Shows</h3>
                        <div class="ticket-carousel pvt85">
                            <div class="swiper-container carousel-container movie-images" data-col="5">
                                <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-1.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-2.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-3.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-4.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-5.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                            <div class="swiper-slide">
                                            <div class="movie-image" data-bg-image="{{asset('public/photoes/carousel/movie-6.jpg')}}">
                                                <div class="entry-hover">
                                                    <div class="entry-actions">
                                                        <a href="https://vimeo.com/28177848" class="btn-trailers video-player">watch trailer</a>
                                                        <a href="#order" class="btn-ticket order_btn ">buy ticket</a>
                                                    </div>
                                                </div>
                                                <div class="entry-desc">
                                                    <div class="rating">
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                        <input name="stars" type="radio">
                                                        <label>☆</label>
                                                    </div>
                                                    <h3 class="entry-title">X-Men:Apocalypse</h3>
                                                    <ul class="entry-date">
                                                        <li>11 :00</li>  
                                                        <li>13 :50</li>  
                                                        <li>14 :00</li>  
                                                        <li>18 :00</li>  
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                                                    </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                    </div>
                </div>
            </div> 


<!-- End Latest Tv-Shows -->


<br><br>
@endsection