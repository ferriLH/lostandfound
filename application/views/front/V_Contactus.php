<?php
$this->load->view('front/parts/V_Header');
$this->load->view('front/parts/V_Navigation');
?>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url('assets/front/img/bg-img/hero-1.jpg') ?>)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact">
        <!-- Contact Form Area -->
        <div class="contact-form-area equal-height">
            <div class="contact-text">
                <h4>Dear Users</h4>
                <p>Hallo, Thanks for using our app, we are very appreciate. we are from Haptic.id developer of Lost And Found think that our app is not perfect. if u have a problem or suggest. just tell us we are very happy to listen whats your opinion. We are Sorry and Thank You !</p>
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i>Universitas Komputer Indonesia (UNIKOM)</h6>
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> No. 25-33</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i>emailhapticproject@gmail.com</h6>
                        <br>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> +34 567 22478 49567</h6>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form-title">
                    <h6>What do you think ? write in the form down bellow!</h6>
                </div>
                <?php
                if (validation_errors() || $this->session->flashdata('result_pesan')) {
                    ?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success</strong>
                        <?php echo validation_errors(); ?>
                        <?php echo $this->session->flashdata('result_pesan'); ?>
                    </div>
                <?php } ?>
                <form action="<?php echo base_url('C_Contactus/message')?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn dorne-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Area -->
        <div class="dorne-map-area equal-height">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1284.2053561876448!2d107.61478021711305!3d-6.886913654721848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUniversitas+Komputer+Indonesia!5e0!3m2!1sid!2sid!4v1547053793387" width="650" height="1050" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div id="googleMap"></div>

        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

    <?php
    $this->load->view('front/parts/V_Footer');
    ?>