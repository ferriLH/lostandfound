<?php 
 $this->load->view("front/parts/V_Header");
 $this->load->view("front/parts/V_Navigation")
?>


    

    <!-- ***** Single Listing Area Start ***** -->
    <br>
    <br>
    <br>
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <?php foreach ($barang as $b ) {?>
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">
                            
                        <div class="listing-title">
                            
                            <h4><?php echo $b->nama_barang;?></h4>
                            
                            <a href="#" class="btn dorne-btn mt-1"><?php echo $b->nama_label;?></a>
                            <h6><?php echo $b->nama_kota;?></h6>
                            <h6><?php echo $b->nama_univ;?></h6>
                            <h6><?php echo $b->tanggal_upload;?></h6>
                        </div>

                        <!-- <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#review">Reviews</a></li>
                                    <li><a href="#lomap">Location on map</a></li>
                                </ul>
                            </nav>
                        </div> -->

                        <div class="overview-content mt-50" id="overview">
                            <!-- <textarea rows="4" cols="50"> -->
                            <p align="center"><?php echo $b->deskripsi;?></p>
                        <!-- </textarea> -->
                        </div>
                            


                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i> Claim This Stuff</a>
                        </div>

                        <!-- FOTO BARANG -->
                        <div class="book-a-table-widget mt-50">
                            <div class="col-6">
                                <img src="<?php echo base_url('foto_barang/');echo $b->foto_barang;?>" alt="">
                            </div>
                        </div>

                        
                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="img/clients-img/1.jpg" alt="">
                            <div class="authors-name">
                                <a href="#"><?php echo $b->nama;?></a>
                                <p>Sang Penemu</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Single Listing Area End ***** -->
<?php }?>
    <?php 
    $this->load->view("front/parts/V_Footer");
    ?>