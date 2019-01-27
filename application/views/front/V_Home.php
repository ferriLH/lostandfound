<?php
$this->load->view("front/parts/V_Header");
$this->load->view("front/parts/V_Navigation");
?>
<style>
    .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:*/
        top: 100%;
        left: 0;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
    }

    /*when hovering an item:*/
    .autocomplete-items div:hover {
        background-color: #e9e9e9;
    }

    /*when navigating through the items using the arrow keys:*/
    .autocomplete-active {
        background-color: DodgerBlue !important;
        color: #ffffff;
    }
</style>

<!-- ***** Welcome Area Start ***** -->
<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url('assets/front/img/bg-img/hero-1.jpg')?>);">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2 id="s">Discover your stuff here</h2>
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
                            <form action="<?php echo base_url('explore/search')?>" method="get">
                                <input style="width: 100%;" class="form-control" type="text" placeholder="Type your stuff here" name="keyword">
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <div style="position: relative;" class="tab-content" id="nav-tabContent">
                            <h6>What are you looking for?</h6>
                            <form action="<?php echo base_url('explore/advancedsearch')?>" method="get">
                                <input style="width: 100%;" placeholder="Label" type="text" id="myInput" name="inputlabel" class="form-control autocomplete">&nbsp;&nbsp;&nbsp;
                                <select style="width: 100%;" class="custom-select" name="nama_kota">
                                    <option selected>Area</option>
                                    <?php foreach ($kota as $k):?>
                                     <option value="<?php echo($k->nama_kota);?>"><?php print_r($k->nama_kota);?></option>
                                     <?php endforeach;?>
                                </select>
                                <select style="width: 100%;" class="custom-select" name="univ">
                                    <option selected>university</option>
                                    <?php foreach ($univ as $u):?>
                                     <option value="<?php echo($u->nama_univ);?>"><?php print_r($u->nama_univ);?></option>
                                     <?php endforeach;?>
                                </select>
                                <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                            </form>
                        </div>
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
<br>
<br>
<br>
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
                            <a href="<?php echo base_url('C_List/byCity/1')?>">Midtown of Bandung</a>
<!--                            <a href="#">1643 Informations</a>-->
                        </div>
                        <div class="add-more">
<!--                            <a href="#">+</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                    <img src="<?php echo base_url('assets/front/img/bg-img/editor-2.jpg')?>" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="<?php echo base_url('C_List/byCity/2')?>">West Bandung</a>
<!--                            <a href="#">943 Information</a>-->
                        </div>
                        <div class="add-more">
<!--                            <a href="#">+</a>-->
                        </div>
                    </div>
                </div>
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                    <img src="<?php echo base_url('assets/front/img/bg-img/editor-3.jpg')?>" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="<?php echo base_url('C_List/byCity/3')?>">East Bandung</a>
<!--                            <a href="#">243 Information</a>-->
                        </div>
                        <div class="add-more">
<!--                            <a href="#">+</a>-->
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
                                <a href="<?php echo base_url('C_List/byCity/4')?>">Midtown of Cimahi</a>
<!--                                <a href="#">43 Informations</a>-->
                            </div>
                            <div class="add-more">
<!--                                <a href="#">+</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                        <img src="<?php echo base_url('assets/front/img/bg-img/editor-2.jpg')?>" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="<?php echo base_url('C_List/byCity/5')?>">South Bandung</a>
<!--                                <a href="#">94 Informations</a>-->
                            </div>
                            <div class="add-more">
<!--                                <a href="#">+</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                        <img src="<?php echo base_url('assets/front/img/bg-img/editor-3.jpg')?>" alt="">
                        <div class="editors-pick-info">
                            <div class="places-total-destinations d-flex">
                                <a href="<?php echo base_url('C_List/byCity/6')?>">North and South Cimahi </a>
<!--                                <a href="#">243 Informations</a>-->
                            </div>
                            <div class="add-more">
<!--                                <a href="#">+</a>-->
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
<!--<div class="dorne-clients-area section-padding-100">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <div class="clients-logo d-md-flex align-items-center justify-content-around">-->
<!--                    <img src="--><?php //echo base_url('assets/front/img/clients-img/5.png')?><!--" alt="">-->
<!--                    <img src="--><?php //echo base_url('assets/front/img/clients-img/5.png')?><!--" alt="">-->
<!--                    <img src="--><?php //echo base_url('assets/front/img/clients-img/5.png')?><!--" alt="">-->
<!--                    <img src="--><?php //echo base_url('assets/front/img/clients-img/5.png')?><!--" alt="">-->
<!--                    <img src="--><?php //echo base_url('assets/front/img/clients-img/5.png')?><!--" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- ***** Clients Area End ***** -->
<!--Script auto complete-->
<script>
    function autocomplete(inp, arr) {
        /*the autocomplete function takes two arguments,
        the text field element and an array of possible autocompleted values:*/
        var currentFocus;
        /*execute a function when someone writes in the text field:*/
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");
            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
                /*check if the item starts with the same letters as the text field value:*/
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                    /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    /*make the matching letters bold:*/
                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                    b.innerHTML += arr[i].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    b.addEventListener("click", function(e) {
                        /*insert the value for the autocomplete text field:*/
                        inp.value = this.getElementsByTagName("input")[0].value;
                        /*close the list of autocompleted values,
                        (or any other open lists of autocompleted values:*/
                        closeAllLists();
                    });
                    a.appendChild(b);
                }
            }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            var x = document.getElementById(this.id + "autocomplete-list");
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
                /*If the arrow DOWN key is pressed,
                increase the currentFocus variable:*/
                currentFocus++;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 38) { //up
                /*If the arrow UP key is pressed,
                decrease the currentFocus variable:*/
                currentFocus--;
                /*and and make the current item more visible:*/
                addActive(x);
            } else if (e.keyCode == 13) {
                /*If the ENTER key is pressed, prevent the form from being submitted,*/
                e.preventDefault();
                if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                }
            }
        });
        function addActive(x) {
            /*a function to classify an item as "active":*/
            if (!x) return false;
            /*start by removing the "active" class on all items:*/
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            /*add class "autocomplete-active":*/
            x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
            /*a function to remove the "active" class from all autocomplete items:*/
            for (var i = 0; i < x.length; i++) {
                x[i].classList.remove("autocomplete-active");
            }
        }
        function closeAllLists(elmnt) {
            /*close all autocomplete lists in the document,
            except the one passed as an argument:*/
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
                if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                }
            }
        }
        /*execute a function when someone clicks in the document:*/
        document.addEventListener("click", function (e) {
            closeAllLists(e.target);
        });
    }

    /*An array containing all the country names in the world:*/
    //var data_label = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
    var data_label = [<?php foreach ($label as $data_l){echo "'".$data_l->nama_barang."',";} ?>];

    /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
    autocomplete(document.getElementById("myInput"), data_label);
</script>
<!--end auto complete-->

<?php
$this->load->view("front/parts/V_Footer");
?>

