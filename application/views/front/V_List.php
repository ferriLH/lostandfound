
<?php
$this->load->view("front/parts/V_Header");
$this->load->view("front/parts/V_Navigation");
?>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url()?>assets/front/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>DISCOVERED STUFF</h4>
                        <p>ALL STUFF</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Features Area -->
                <?php foreach($barang as $b) {?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="<?php echo base_url('foto_barang/');echo $b->foto_barang;?>" alt="">
                        <!-- Label -->
                        <div class="price-start">
                            <p><?php echo $b->nama_label;?></p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5><?php echo anchor('C_Detailstuff/index/'.$b->id_barang,$b->nama_barang) ?></h5>
                                <p><?php echo $b->nama_kota;?></p>
                                <p><?php echo $b->nama;?></p>
                            </div>
                            <!-- <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <?php
$this->load->view("front/parts/V_Footer");
?>

</html>