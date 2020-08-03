<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Website Information Brebes Flood</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png')}}" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/LineIcons.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">

</head>

<body>

<!--<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>-->


<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== NAVBAR TWO PART START ======-->

<section class="navbar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="#">
                        <img src="{{asset('frontend/assets/images/logo.svg')}}" alt="Logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active"><a class="page-scroll" href="#home">home</a></li>
                            <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                            <!--                                 <li class="nav-item"><a class="page-scroll" href="#pricing">Pricing</a></li>
                             -->                                <li class="nav-item"><a class="page-scroll" href="#about">Aplikasi</a></li>
                            <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <!--  <div class="navbar-btn d-none d-sm-inline-block">
                         <ul>
                             <li><a class="solid" href="#">Download</a></li>
                         </ul>
                     </div> -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== NAVBAR TWO PART ENDS ======-->

<!--====== SLIDER PART START ======-->

<section id="home" class="slider_area">
    <div id="carouselThree" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselThree" ></li>
            <!-- <li data-target="#carouselThree" data-slide-to="1"></li>
            <li data-target="#carouselThree" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider-content">
                                <h1 class="title">Business is Now Digital</h1>
                                <p class="text">Cuma Simulasi</p>
                                <ul class="slider-btn rounded-buttons">
                                    {{--<li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>--}}
                                    {{--<li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="slider-image-box d-none d-lg-flex align-items-end">
                    <div class="slider-image">
                        <img src="{{ asset('frontend/assets/images/slider/1.png')}}" alt="Hero">
                    </div> <!-- slider-imgae -->
                </div> <!-- slider-imgae box -->
            </div> <!-- carousel-item -->

            <!--   <div class="carousel-item">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="slider-content">
                                  <h1 class="title">Crafted for Business</h1>
                                  <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                  <ul class="slider-btn rounded-buttons">
                                      <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                      <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="slider-image-box d-none d-lg-flex align-items-end">
                      <div class="slider-image">
                          <img src="assets/images/slider/2.png" alt="Hero">
                      </div>
                  </div>
              </div>  -->

            <!--   <div class="carousel-item">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="slider-content">
                                  <h1 class="title">Based on Bootstrap 4</h1>
                                  <p class="text">We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                                  <ul class="slider-btn rounded-buttons">
                                      <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                      <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="slider-image-box d-none d-lg-flex align-items-end">
                      <div class="slider-image">
                          <img src="assets/images/slider/3.png" alt="Hero">
                      </div>
                  </div>
              </div>
          </div> -->

            <!--   <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                  <i class="lni lni-arrow-left"></i>
              </a>
              <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                  <i class="lni lni-arrow-right"></i>
              </a> -->
        </div>
    </div>
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== FEATRES TWO PART START ======-->

<section id="services" class="features-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-10">
                    <h3 class="title">Our Services</h3>
                    <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                </div> <!-- row -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Graphics Design</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-brush"></i>
                            <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Website Design</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-layout"></i>
                            <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">Digital Marketing</a></h4>
                        <div class="features-icon">
                            <i class="lni lni-bolt"></i>
                            <img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="features-content">
                        <p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>
                        <a class="features-btn" href="#">LEARN MORE</a>
                    </div>
                </div> <!-- single features -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<!--====== ABOUT PART START ======-->

<section id="about" class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="faq-content mt-45">
                    <div class="about-title">
                        <h6 class="sub-title">Info Information Brebes Flood</h6>
                        <h4 class="title">Tata cara nya</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bagaimana untuk menginstall aplikasi itu ?</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Anda search di google playstore dengan pencarian information brebes flood atau bisa klik dengan link ini.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apakah fitur yang didalam aplikasi itu?</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Aplikasi itu bisa untuk memonitoring keadaan ketinggian debit tumpah (bendungan) dan sungai, melihat riwayat pada bulan ini dan hari ini, serta juga notifikasi ketika dalam kondisi bahaya.</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah saya kalo tidak install aplikasi itu bisa dapat pemberitahuan dalam kondisi bahaya?</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Bisa tetep dapat dengan mendaftarkan nomor whatsapp ke sini.</p>
                                        <form>
                                            <input type="" name="no_hp">
                                            <input type="submit" name="simpan">
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <!-- <div class="card">
                                <div class="card-header" id="headingFore">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFore" aria-expanded="false" aria-controls="collapseFore">Frequently Asked Question Four</a>
                                </div>
                                <div id="collapseFore" class="collapse" aria-labelledby="headingFore" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div>  -->
                            <!-- <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Frequently Asked Question Five</a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Morbi vehicula arcu et pellentesque tincidunt. Nunc ligula nulla, lobortis a elementum non, vulputate ut arcu. Aliquam erat volutpat. Nullam lacinia felis.</p>
                                    </div>
                                </div>
                            </div>  -->
                        </div>
                    </div> <!-- faq accordion -->
                </div> <!-- faq content -->
            </div>
            <div class="col-lg-7">
                <div class="about-image mt-50">
                    <img src="{{asset('frontend/assets/images/about.jpg')}}" alt="about">
                </div> <!-- faq image -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>



<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Contact</h3>
                    <p class="text">Informasi Pemerintah Kabupaten Brebes</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"> Elizabeth St, Melbourne<br>1202 Australia.</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">hello@ayroui.com</p>
                            <p class="text">support@uideck.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">+333 789-321-654</p>
                            <p class="text">+333 985-458-609</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
            </div> <!-- row -->
        </div> <!-- contact info -->

    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<!--====== FOOTER PART START ======-->

<section class="footer-area footer-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="footer-logo text-center">
                    <a class="mt-30" href="index.html"><img src="{{ asset('frontend/assets/images/logo.svg')}}" alt="Logo"></a>
                </div> <!-- footer logo -->
                <ul class="social text-center mt-60">
                    <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                    <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                </ul> <!-- social -->
                <div class="footer-support text-center">
                    <span class="number">+8801234567890</span>
                    <span class="mail">support@uideck.com</span>
                </div>
                <div class="copyright text-center mt-35">
                    <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                </div> <!--  copyright -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

<!--====== PART ENDS ======-->




<!--====== Jquery js ======-->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('frontend/assets/js/ajax-contact.js')}}"></script>

<!--====== Isotope js ======-->
<script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>

<!--====== Scrolling Nav js ======-->
<script src="{{ asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/scrolling-nav.js')}}"></script>

<!--====== Main js ======-->
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
