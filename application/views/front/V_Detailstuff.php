<?php 
 $this->load->view("front/parts/V_Header");
 $this->load->view("front/parts/V_Navigation");
?>

    <!-- Modal: modalPoll -->
    <div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <p class="heading lead">Send Messege
                    </p>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">×</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="text-center">
                        <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            <strong>Send Messege to founder here !</strong>
                        </p>

                    </div>

                    <hr>
                    <div class="md-form">
                        <textarea type="text" id="subject" class="md-textarea form-control" rows="1" placeholder="Subject"></textarea>
                    </div>
                    <!--Basic textarea-->
                    <div class="md-form">
                        <textarea type="text" id="isi_pesan" class="md-textarea form-control" rows="3" placeholder="Your message"></textarea>

                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-primary waves-effect waves-light">Send
                        <i class="fa fa-paper-plane ml-1"></i>
                    </a>
                    <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: modalPoll -->

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
                            <button type="button" class="btn dorne-btn w-100" data-toggle="modal" data-target="#modalPoll-1">Send Messege</button>
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