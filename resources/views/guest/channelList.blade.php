@extends('layouts.guest')

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
@section('content')
    <div class="container" style="padding: 100px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="">Our Different Categorical Channel List</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/package" class="btn btn-primary">Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <section class="header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Tabs nav -->
                                        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        
                                            <a class="nav-link mb-3 p-3 shadow active" id="v-pills-religion-tab" data-toggle="pill" href="#v-pills-religion" role="tab" aria-controls="v-pills-religion" aria-selected="true">
                                                <i class="fas fa-mosque mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Religious</span>
                                            </a>
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-sports-tab" data-toggle="pill" href="#v-pills-sports" role="tab" aria-controls="v-pills-sports" aria-selected="false">
                                                <i class="fa fa-soccer-ball-o mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Sports</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-educational-tab" data-toggle="pill" href="#v-pills-educational" role="tab" aria-controls="v-pills-educational" aria-selected="false">
                                                <i class="fas fa-chalkboard-teacher mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Educational</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-children-tab" data-toggle="pill" href="#v-pills-children" role="tab" aria-controls="v-pills-children" aria-selected="false">
                                                <i class="fa fa-child mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Children</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-news-tab" data-toggle="pill" href="#v-pills-news" role="tab" aria-controls="v-pills-news" aria-selected="false">
                                                <i class="fa fa-newspaper-o mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">News</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-movie-tab" data-toggle="pill" href="#v-pills-movie" role="tab" aria-controls="v-pills-movie" aria-selected="false">
                                                <i class="fa fa-flag mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Movie</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-music-tab" data-toggle="pill" href="#v-pills-music" role="tab" aria-controls="v-pills-music" aria-selected="false">
                                                <i class="fa fa-music mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Music</span>
                                            </a>
                        
                                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-comedy-tab" data-toggle="pill" href="#v-pills-comedy" role="tab" aria-controls="v-pills-comedy" aria-selected="false">
                                                <i class="far fa-laugh-squint mr-2"></i>
                                                <span class="font-weight-bold small text-uppercase">Comedy</span>
                                            </a>
                                        </div>
                                    </div>
                        
                        
                                    <div class="col-md-9">
                                        <!-- Tabs content -->
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div  style="margin-left: 2%" class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-religion" role="tabpanel" aria-labelledby="v-pills-religion-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Peace TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> British Muslim TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Muhammadiya TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Paigham TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Takbeer TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Madani Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Ummah Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Hidayat TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> IQRA TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Noor TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Islam Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> MTA Muslim TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Bethat TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Eman Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Madani Channel</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-sports" role="tabpanel" aria-labelledby="v-pills-sports-tab">
                                                
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> GTV (Bangladesh)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sky Sports (United Kingdom)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Ten Sports (India)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Digi Sport (Romania)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sport 1 (Hungary)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sport+ (French)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Nova Sports (Greece)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Fox Sports (United States)</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Star Sports (India)</a></li>
                                                </ul>
                                            </div>
                                            
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-educational" role="tabpanel" aria-labelledby="v-pills-educational-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Ovation</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> NASA TV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> World</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Science</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Discovery Travel & Living</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> NAT GEO WILD</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> ANIMAL PLANET</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> HISTORY</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> DISCOVERY</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> NATIONAL GEOGRAPHIC</a></li>
                                                </ul>
                                            </div>

                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-children" role="tabpanel" aria-labelledby="v-pills-children-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Nickelodeon</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Cartoon Network</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Nick Jr.</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> CBBC</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Nicktoons</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Disney Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Boomerang</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Jetix</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Kids WB</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Discovery Kids</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-news" role="tabpanel" aria-labelledby="v-pills-news-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> BBC World News</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Fox News</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> CNN</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sky News</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> MSNBC</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Al Jazeera</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Euronews</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Al Arabiya</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Geo News</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> NDTV India</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-movie" role="tabpanel" aria-labelledby="v-pills-movie-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> HBO</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> ATN Bangla</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Cinemax</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Discovery Channel</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> USA Network</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sony Max</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Starz</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Bangla Vision</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Bravo</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Showtime</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-music" role="tabpanel" aria-labelledby="v-pills-music-tab">
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> PTC Punjabi</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Mastiii</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Sony Mix</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> B4U Music</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Zing</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Zoom</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Imagine Showbiz</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> VH1 India</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> MTV</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> 9XO</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-comedy" role="tabpanel" aria-labelledby="v-pills-comedy-tab">
                                                
                                                <ul style="width: 500px;list-style-type: none;text-transform: capitalize;font-size: 18px">
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> StarPlus</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> ARY Zindagi</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> GEO kahani</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Discover Jeet</a></li>
                                                    <li><a href=""><i class="fa fa-tv mr-2"></i> Hot Comedy Central</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>  
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>                   
@endsection