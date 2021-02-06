@extends('layouts.app')

@section('content')
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center overlay" style="background-image:url('{{asset('img/banner/banner.png')}}')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Внимание</span>
                                </div>
                                <h3>Доставка <br>
                                    На Дом</h3>
                                <h4>Открылась</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center overlay" style="background-image:url('{{asset('img/banner/banner2.png')}}')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Новинка</span>
                                </div>
                                <h3>Новые <br>
                                    Вкусы</h3>
                                <h4>Попробуй</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <h3><span>Наше Меню</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/1.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Beefy Burgers</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/2.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Boys</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/3.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Bizz</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/4.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Crackles Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/5.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Bull Burgers</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/6.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Rocket Burgers</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/7.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Smokin Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="img/burger/8.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Delish Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>50 грн</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="Menu.html">Больше..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_room_startt -->
    <div class="Burger_President_area">
        <div class="Burger_President_here">
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>200 грн</span>
                            <h3>The Burger President</h3>
                            <p>Great way to make your business appear trust <br> and relevant.</p>
                            <a href="#" class="boxed-btn3">Заказать Сейчас</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="single_Burger_President">
                <div class="room_thumb">
                    <img src="img/burgers/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>200 грн</span>
                            <h3>The Burger President</h3>
                            <p>Great way to make your business appear trust <br> and relevant.</p>
                            <a href="#" class="boxed-btn3">Заказать Сейчас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- features_room_end -->
    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="about_thumb2">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>О Нас</span>
                        </div>
                        <p>Наше заведение открыто с 2018 года, с тех пор мы радуем деток и взрослых города Комсомольска вкусным мороженым и вкусными бургерами. Так же нашей славной традицеей стало отмечать день рождение деток в нашем заведении. За эти года ни одна семья не ушла с нашего кафе грустным или голодными</p>
                        <div class="img_thumb">
                            <img src="img/jessica-signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- about_area_end -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    	<div class="container">
        	<div class="row">
	            <div class="col-lg-3 col-md-6">
	                <div class="single_instagram">
	                    <img src="img/instragram/1.png" alt="">
	                    <div class="ovrelay">
	                        <a href="#">
	                            <i class="fa fa-instagram"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="single_instagram">
	                    <img src="img/instragram/2.png" alt="">
	                    <div class="ovrelay">
	                        <a href="#">
	                            <i class="fa fa-instagram"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="single_instagram">
	                    <img src="img/instragram/3.png" alt="">
	                    <div class="ovrelay">
	                        <a href="#">
	                            <i class="fa fa-instagram"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6">
	                <div class="single_instagram">
	                    <img src="img/instragram/4.png" alt="">
	                    <div class="ovrelay">
	                        <a href="#">
	                            <i class="fa fa-instagram"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
