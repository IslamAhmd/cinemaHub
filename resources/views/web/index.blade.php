@extends('web.partials.master')
@section('content')
    <div class="flexslider progression-studios-dashboard-slider">
        <ul class="slides">
            @foreach($slider_images as $slide)
                <li class="progression_studios_animate_left">
                    <div class="progression-studios-slider-dashboard-image-background" style="background-image:url({{asset('public/uploads/'.$slide->image)}});">
                        <div class="progression-studios-slider-display-table">
                            <div class="progression-studios-slider-vertical-align">
                                <div class="container">
                                    <div class="progression-studios-slider-dashboard-caption-width">
                                        <div class="progression-studios-slider-caption-align">
                                            <h2><a href="dashboard-movie-profile.html">{{$slide->caption}}</a></h2>
                                            <p class="progression-studios-slider-description">{{$slide->caption}}</p>
                                            <a class="btn btn-green-pro btn-slider-pro btn-shadow-pro afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i>MORE</a>
                                        </div><!-- close .progression-studios-slider-caption-align -->
                                    </div><!-- close .progression-studios-slider-caption-width -->
                                </div><!-- close .container -->
                            </div><!-- close .progression-studios-slider-vertical-align -->
                        </div><!-- close .progression-studios-slider-display-table -->
                        <div class="progression-studios-slider-mobile-background-cover"></div>
                    </div><!-- close .progression-studios-slider-image-background -->
                </li>
            @endforeach
        </ul>
    </div><!-- close .progression-studios-slider - See /js/script.js file for options -->
    <ul class="dashboard-genres-pro">
        <li class="active">
            <i class="fa fa-2x fa-list-ul"></i>
            <h6>All</h6>
        </li>
        @foreach($genres as $genre)
            <li>
                <img src="{{asset('public/uploads/thumb/'.$genre->image)}}" alt="Drama">
                <h6>{{$genre->name}}</h6>
            </li>
        @endforeach
    </ul>
    <div class="dashboard-container">
        <h4 class="heading-extra-margin-bottom">Latest Movies</h4>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-1.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Wild Things Are</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-2.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Central Intelligence</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-3.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Zoolander No. 2</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-4.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Bad Neighbors 2</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-5.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Star Wars: Rogue One</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-6.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Imitation Game</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-7.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Fantastic Beasts</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-8.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Edge of Tomorrow</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-9.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Allegiant</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-10.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Lo and Behold</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-11.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Drive</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-12.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Nightcrawler</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

        </div><!-- close .row -->
<hr>


    </div><!-- close .dashboard-container -->

    <div class="dashboard-container">
        <h4 class="heading-extra-margin-bottom">Latest Tv Shows</h4>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-1.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Wild Things Are</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-2.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Central Intelligence</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-3.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Zoolander No. 2</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-4.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Bad Neighbors 2</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-5.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Star Wars: Rogue One</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-6.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Imitation Game</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-7.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Fantastic Beasts</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-8.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Edge of Tomorrow</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-9.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Allegiant</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-10.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Lo and Behold</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.6"
                                    data-animation-start-value="0.6"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
                                    data-empty-fill="#ffe1e1"
                                    data-reverse="true"
                            ><span style="color:#ff4141;">6.0</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->


            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-11.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Drive</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.86"
                                    data-animation-start-value="0.86"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">8.6</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item-listing-container-skrn">
                    <a href="dashboard-movie-profile.html"><img src="images/demo/listing-12.jpg" alt="Listing"></a>
                    <div class="item-listing-text-skrn">
                        <div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Nightcrawler</a></h6>
                            <div
                                    class="circle-rating-pro"
                                    data-value="0.72"
                                    data-animation-start-value="0.72"
                                    data-size="32"
                                    data-thickness="3"
                                    data-fill="{
							          &quot;color&quot;: &quot;#42b740&quot;
							        }"
                                    data-empty-fill="#def6de"
                                    data-reverse="true"
                            ><span style="color:#42b740;">7.2</span></div>
                        </div><!-- close .item-listing-text-skrn-vertical-align -->
                    </div><!-- close .item-listing-text-skrn -->
                </div><!-- close .item-listing-container-skrn -->
            </div><!-- close .col -->

        </div><!-- close .row -->


<hr>


    </div><!-- close .dashboard-container -->

@endsection