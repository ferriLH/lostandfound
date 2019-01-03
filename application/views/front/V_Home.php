<?php
$this->load->view("front/parts/V_Header");
$this->load->view("front/parts/V_Navigation");
?>
<!-- ***** Welcome Area Start ***** -->
<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url('assets/front/img/bg-img/hero-1.jpg')?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2>Discover your stuff here</h2>
                    <h4>This is the best dashboard of your lossing stuff</h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <div class="nav nav-tabs" id="heroTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Search</a>
                        <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Advance</a>
                    </div>
                    <!-- Tabs Content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                            <h6>What are you looking for?</h6>
                            <form action="#" method="get">
                                <input size=70%" type="text">
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h6>What are you looking for?</h6>
                            <form action="#" method="get">
                                <select class="custom-select">
                                    <option selected>Label</option>
                                     <?php foreach ($label as $l):?>
                                     <option value=<?php print_r($l->nama_label);?>><?php print_r($l->nama_label);?></option>
                                     <?php endforeach;?>
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option> -->
                                </select>
                                <select class="custom-select">
                                    <option selected>Area</option>
                                    <?php foreach ($kota as $k):?>
                                     <option value=<?php print_r($k->nama_kota);?>><?php print_r($k->nama_kota);?></option>
                                     <?php endforeach;?>
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option> -->
                                </select>
                                <select class="custom-select">
                                    <option selected>university</option>
                                    <?php foreach ($univ as $u):?>
                                     <option value=<?php print_r($u->nama_univ);?>><?php print_r($u->nama_univ);?></option>
                                     <?php endforeach;?>
                                    <!-- <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option> -->
                                </select>
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Social Btn -->
    <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <h6></h6>
            <span></span>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Catagory Area Start ***** -->
<!-- <section class="dorne-catagory-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-catagories">
                    <div class="row"> -->
                        <!-- Single Catagory Area -->
                        <!-- div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                <div class="catagory-content">
                                    <img src="<?php //echo base_url('assets/front/img/core-img/icon-1.png')?>" alt="">
                                    <a href="#">
                                        <h6>Hotels</h6>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- Single Catagory Area -->
                        <!-- <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <img src="<?php //echo base_url('assets/front/img/core-img/icon-2.png')?>" alt="">
                                    <a href="#">
                                        <h6>Restaurants</h6>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- Single Catagory Area -->
                       <!--  <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <img src="<?php //echo base_url('assets/front/img/core-img/icon-3.png')?>" alt="">
                                    <a href="#">
                                        <h6>Shopping</h6>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- Single Catagory Area -->
                        <!-- <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                    <img src="<?php //echo base_url('assets/front/img/core-img/icon-4.png')?>" alt="">
                                    <a href="#">
                                        <h6>Beauty &amp; Spa</h6>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                        <!-- Single Catagory Area -->
                        <!-- <div class="col-12 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                <div class="catagory-content">
                                    <img src="<?php //echo base_url('assets/front/img/core-img/icon-5.png')?>" alt="">
                                    <a href="#">
                                        <h6>Cinema</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Catagory Area End ***** -->

<!-- ***** About Area Start ***** -->
<section class="dorne-about-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                    <h2>Discover your stuff with <br><span>Lost and Found</span></h2>
                    <p>Lost and Found is a dashboard that can find your lost items faster.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->

<!-- ***** Editor Pick Area Start ***** -->
<section class="dorne-editors-pick-area bg-img bg-overlay-9 section-padding-100" style="background-image: url(<?php echo base_url('assets/front/img/bg-img/hero-2.jpg')?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Cities you must see</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="<?php echo base_url('assets/front/img/bg-img/editor-1.jpg')?>" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">Midtown of Bandung</a>
                            <a href="#">1643 Informations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo base_url('assets/front/img/bg-img/editor-2.jpg')?>" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">West Bandung</a>
                            <a href="#">943 Information</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                    <img src="<?php echo base_url('assets/front/img/bg-img/editor-3.jpg')?>" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">East Bandung</a>
                            <a href="#">243 Information</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                        <img src="<?php echo base_url('assets/front/img/bg-img/editor-1.jpg')?>" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">Midtown of Cimahi</a>
                                <a href="#">43 Informations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo base_url('assets/front/img/bg-img/editor-2.jpg')?>" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">South Bandung</a>
                                <a href="#">94 Informations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo base_url('assets/front/img/bg-img/editor-3.jpg')?>" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="#">North and South Cimahi </a>
                                <a href="#">243 Informations</a>
                            </div>
                            <div class="add-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- ***** Editor Pick Area End ***** -->


<!-- ***** Features Restaurant Area Start ***** -->
<section class="dorne-features-restaurant-area bg-default">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>MOST OF LOSSING STUFF</h4>
                    <p>Flash Dashboard</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="<?php echo base_url('assets/front/img/bg-img/feature-6.jpg')?>" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#"></a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Wallet & Card</h5>
                                <p>Campus</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="<?php echo base_url('assets/front/img/bg-img/feature-7.jpg')?>" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#"></a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Vehicle Registration </h5>
                                <p>-</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="<?php echo base_url('assets/front/img/bg-img/feature-8.jpg')?>" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#"></a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Driving License</h5>
                                <p>-</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="<?php echo base_url('assets/front/img/bg-img/feature-9.jpg')?>" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#"></a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Vehicle Key . Certificate</h5>
                                <p>-</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="<?php echo base_url('assets/front/img/bg-img/feature-10.jpg')?>" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#"></a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Mobile Phone</h5>
                                <p>-</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Restaurant Area End ***** -->

<!-- ***** Features Events Area Start ***** -->
<section class="dorne-features-events-area bg-img bg-overlay-9 section-padding-100-50" style="background-image: url(<?php echo base_url('assets/front/img/bg-img/hero-3.jpg')?>)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Discovered Stuff</h4>
                    <p>Flash Timeline</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-1.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">4 Dec 2018</a>
                            <a href="https://goo.gl/maps/Emmr3NnA6bP2"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Dompet Cokelat</h5>
                        <h6>Kampus Unjani</h6>
                        <p>Ditemukan Sebuah dompet berwarna cokelat di dekat kampus unjani sebelah fotokopi</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-2.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>STNK dan BPKB</h5>
                        <h6>Kampus UPI</h6>
                        <p>Ditemukan STNK dan BPKB dikampus UPI sebelah Martabak Lezat</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-3.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">31 Nov 2018</a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Tas Eiger Kecil</h5>
                        <h6>Musholla Poltekes</h6>
                        <p>aku nemu tas eiger kecil gatau barangnya apa</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-4.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">1 Dec 2018</a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Kunci Mobil Ayla</h5>
                        <h6>ARS Service</h6>
                        <p>Kunci Mobil sapa nih ketinggalan</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.6s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-5.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>New Moon Party</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig" data-wow-delay="0.7s">
                    <div class="feature-events-thumb">
                        <img src="<?php echo base_url('assets/front/img/bg-img/event-6.jpg')?>" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="<?php echo base_url('assets/front/img/core-img/map.png')?>" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Happy hour at pub</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Events Area End ***** -->

<!-- ***** Clients Area Start ***** -->
<div class="dorne-clients-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients-logo d-md-flex align-items-center justify-content-around">
                    <img src="<?php echo base_url('assets/front/img/clients-img/5.png')?>" alt="">
                    <img src="<?php echo base_url('assets/front/img/clients-img/5.png')?>" alt="">
                    <img src="<?php echo base_url('assets/front/img/clients-img/5.png')?>" alt="">
                    <img src="<?php echo base_url('assets/front/img/clients-img/5.png')?>" alt="">
                    <img src="<?php echo base_url('assets/front/img/clients-img/5.png')?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Clients Area End ***** -->
<?php
$this->load->view("front/parts/V_Footer");
?>

