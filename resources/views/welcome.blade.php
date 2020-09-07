@extends('layout')

@section('pages')
    <!--Slider Start-->
    <!--Slider Start-->
    <section id="home-slider" class="owl-carousel owl-theme wf100">
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>Save Environment for Future</strong>
                    <h1>Think Green & Plant Trees</h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide1.jpg')}}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>Before it’s too late for our lives</strong>
                    <h1>Save Water for Generations </h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide2.jpg')}}" alt="">
        </div>
        <div class="item">
            <div class="slider-caption h3slider">
                <div class="container">
                    <strong>Generate & Store Energy by</strong>
                    <h1>Install Windmills & Turbines </h1>
                    <a href="{{route('candidat')}}">INSCRIPTION AU CONCOURS</a>
                </div>
            </div>
            <img src="{{asset('assets/images/h3slide3.jpg')}}" alt="">
        </div>
    </section>
    <!--Slider End-->
    <!--Slider End-->
    <!--Service Area Start-->
    <!--Service Area Start-->
    <section class="donation-join wf100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="donation-wrap">
                        <h2>We are Committed to Stop Global Warming</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <ul class="funds">
                            <li class="text-left"><strong>73%</strong> Funded</li>
                            <li class="text-center"><strong>$948.00</strong> Raised</li>
                            <li class="text-right"><strong>$1750.00</strong> Required</li>
                        </ul>
                        <form>
                            <ul class="radio-boxes">
                                <li>
                                    <div class="radio custom">
                                        <input name="donation" id="d1" type="radio" class="css-radio">
                                        <label for="d1" class="css-label">$5</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio custom">
                                        <input name="donation" id="d2" type="radio" class="css-radio">
                                        <label for="d2" class="css-label">$20</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio custom">
                                        <input name="donation" id="d3" type="radio" class="css-radio">
                                        <label for="d3" class="css-label">$50</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio custom">
                                        <input name="donation" id="d4" type="radio" class="css-radio">
                                        <label for="d4" class="css-label">$100</label>
                                    </div>
                                </li>
                                <li class="form-submit">
                                    <button type="submit">Donate Now</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="volbox">
                        <img src="images/shakehandicon.png" alt="">
                        <h5>Become a Volunteer</h5>
                        <p> Be a volunteer part of our organization and do work on eco friendly projects and make environment clean </p>
                        <a href="#">Join us Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="volbox nob">
                        <img src="images/moneyicon.png" alt="">
                        <h5>Support & Donate</h5>
                        <p> We are working on eco friendly projects, in these projects we need your help, donation & support</p>
                        <a href="#">Support Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Area End-->
    <!--Service Area End-->
    <!--About Section Start-->
    <section class="home2-about wf100 p100 gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="video-img"> <a href="http://vimeo.com/43338103&amp;width=700" data-rel="prettyPhoto" title="Vimeo video"><i class="fas fa-play"></i></a> <img src="{{asset('assets/images/h2about.jpg')}}" alt=""> </div>
                </div>
                <div class="col-md-7">
                    <div class="h2-about-txt">
                        <h3>About ecova</h3>
                        <h2>Eco-friendly products can be made from scratch.</h2>
                        <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green businesses helping people save energy, water, and other resources. </p>
                        <a class="aboutus" href="#">More About us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-facts counter pt80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">89000</p>
                            <p class="ctxt">Trees Planted</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">79000</p>
                            <p class="ctxt">Solar Panels in 2017</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">69000</p>
                            <p class="ctxt">Wildlife Saved</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="counter-box">
                            <p class="counter-count">59000</p>
                            <p class="ctxt">Served Water Gallons</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section End-->
    <!--Urgent Causes Start-->

    <!--Urgent Causes End-->
    <!--Current Projects Start-->

    <!--Current Projects End-->
    <!--News & Articles Start-->

    <!--News & Articles End-->
    <!--Why Ecova + Facts Start-->

    <!--Why Ecova + Facts End-->
    <!--Online Products Start-->

    <!--Online Products End-->

    <!--InstaGram Start-->
    <div class="instagram">
        <ul>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta1.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta2.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta3.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta4.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta5.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta6.jpg')}}" alt=""> </li>
            <li> <a href="#"> <i class="fas fa-search"></i> </a> <img src="{{asset('assets/images/insta7.jpg')}}" alt=""> </li>
        </ul>
    </div>
    <!--InstaGram End-->
@endsection

