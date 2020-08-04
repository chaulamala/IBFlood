<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Website Information Brebes Flood</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/iconp.png')}}" type="image/png">

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
                        <img src="{{asset('frontend/assets/images/iconp.png')}}">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
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
                                <h1 class="title">Information Brebes Flood</h1>
                                <p class="text">Hanya untuk simulasi tugas akhir</p>
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
                        <h4 class="features-title"><a href="#">DEBIT TUMPAH</a></h4>
                        <div class="features-icon">

                            {{--<img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">--}}
                        </div>
                    </div>
                    <div class="features-content">
                        <h4 alt="Shape" id="debit"></h4>
                        {{--<p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>--}}
                        <a class="features-btn" href="#" id="statusd"></a>
                    </div>
                </div> <!-- single features -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single-features mt-40">
                    <div class="features-title-icon d-flex justify-content-between">
                        <h4 class="features-title"><a href="#">SUNGAI</a></h4>
                        <div class="features-icon">

                            {{--<img class="shape" src="{{asset('frontend/assets/images/f-shape-1.svg')}}" alt="Shape">--}}
                        </div>
                    </div>
                    <div class="features-content">
                        <h4 alt="Shape" id="sungai"></h4>

                        {{--<p class="text">Short description for the ones who look for something new. Short description for the ones who look for something new.</p>--}}
                        <a class="features-btn" href="#" id="statuss"></a>
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
                        <h6 class="sub-title">Cara mengakses informasi yang ada pada Information Brebes Flood</h6>
                        <h4 class="title">Tata caranya adalah sebagai berikut :</h4>
                    </div> <!-- faq title -->
                    <div class="about-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bagaimana untuk menginstall aplikasi Information Brebes Flood untuk mendapatkan informasi tentang ketinggian air sungai Pemali pada smartphone?</a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Anda dapat melakukan pencarian pada playstore dengan menuliskan "Information Brebes Flood" atau bisa langsung klik dengan link berikut</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apakah fitur yang ada didalam aplikasi tersebut?</a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">Aplikasi tersebut dapat digunakan untuk memonitoring keadaan ketinggian debit tumpah (bendungan) dan sungai, melihat riwayat pada bulan ini dan hari ini, serta dapat mendapatkan notifikasi ketika sungai dalam kondisi bahaya</p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Apakah dapat tetap menerima pemberitahuan sungai ketika dalam kondisi bahaya tetapi tidak memiliki aplikasi tersebut?</a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">BISA<br>Anda akan tetap mendapatkan pemberitahuan apabila sungai dalam kondisi bahaya dengan mendaftarkan nomor whatsapp anda pada form yang tertera dibawah ini :</p>
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
                    <p class="text">Apabila ada yang ingin anda tanyakan perihal Informasi Debit Air Sungai Pemali Kabupaten Brebes, anda dapat menghubungi kami pada : <br> Senin – Kamis : 07.30 – 16.00 WIB Dan Jumat : 07.30 - 11.00 WIB </p>
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
                            <p class="text">Dinas Pengelolaan Sumber Daya Air dan Tata Ruang Kabupaten Brebes<br>Alamat : JL. Hassanuddin, Komplek RSS. Gandasuli, Pecolotan, Gandasuli, Kec. Brebes, Kabupaten Brebes, Jawa Tengah 52215</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">adminpemkab@gmail.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-phone"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">(0283) 6174144</p>
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
                    <a class="mt-30" href="#"><img src="{{ asset('frontend/assets/images/logo76p.png')}}" alt="Logo"></a>
                </div> <!-- footer logo -->
                <ul class="social text-center mt-60">
                    {{--<li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>--}}
                    <li><a href="https://twitter.com/IBrebes_Flood"><i class="lni lni-twitter-original"></i></a></li>
                    {{--<li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>--}}
                    {{--<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>--}}
                </ul> <!-- social -->
                {{--<div class="footer-support text-center">--}}
                    {{--<span class="number">+8801234567890</span>--}}
                    {{--<span class="mail">support@uideck.com</span>--}}
                {{--</div>--}}
                <div class="copyright text-center mt-35">
                    <p class="text">Hanya untuk simulasi tugas akhir</p>
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


<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDiD8cl8Mt4d5NuD3oxs5HY-7ZzVoiLIZw",
        authDomain: "ibflood.firebaseapp.com",
        databaseURL: "https://ibflood.firebaseio.com",
        projectId: "ibflood",
        storageBucket: "ibflood.appspot.com",
        messagingSenderId: "463737117362",
        appId: "1:792284993851:android:ba07dca2a6003d0eabff1e",
        measurementId: "G-PVEEM9035Y"
    };

    //1:792284993851:android:ba07dca2a6003d0eabff1e
    //1:463737117362:web:2aaea7fd009c77b3b287ab
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    // const analityc = firebase.analytics();
    // console.log(analityc)
    var refirebase = firebase.database().ref('/Raspi3/');
    // console.log(refirebase)
    refirebase.on('value', function (snapshot) {
        const debit = document.querySelector('#debit');
        debit.innerText = snapshot.child('Debit/Ketinggian').val();

        const statusd = document.querySelector('#statusd');
        statusd.innerText = snapshot.child('Debit/Status').val();

        const sungai = document.querySelector('#sungai');
        sungai.innerText = snapshot.child('Sungai/Ketinggian').val();

        const statuss = document.querySelector('#statuss');
        statuss.innerText = snapshot.child('Sungai/Status').val();

    });
</script>




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
