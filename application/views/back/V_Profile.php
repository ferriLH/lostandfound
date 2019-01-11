<?php
$this->load->view("back/parts/V_Header");
$this->load->view("back/parts/V_Navigation");
$id = $this->session->userdata('id_user');
?>
<link rel="shortcut icon" href="http://designshack.net/favicon.ico">
<link rel="icon" href="http://designshack.net/favicon.ico">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/back/profile/css/styles.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/back/profile/js/jquery-1.10.2.min.js"></script>

<div class="col-xl-9">
    <!-- PAGE CONTENT-->
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div id="content" class="clearfix">
                        <?php
                        if (validation_errors() || $this->session->flashdata('success')) {
                            ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success</strong>
                                <?php echo validation_errors(); ?>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } ?>
                        <?php
                        if (validation_errors() || $this->session->flashdata('failed')) {
                            ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Success</strong>
                                <?php echo validation_errors(); ?>
                                <?php echo $this->session->flashdata('failed'); ?>
                            </div>
                        <?php } ?>

                        <div id="userphoto"><img width="150px" src="<?php echo base_url();?>/foto_user/<?php echo $this->session->userdata('file_foto');?>" alt="<?php echo $this->session->userdata('nama');?>"></div>
                        <h1>Minimal User Profile Layout</h1>
                        <nav id="profiletabs">
                            <ul class="clearfix">
                                <li><a href="#bio" class="sel">Bio</a></li>
                                <li><a href="#cpassword">Change Password</a></li>
                                <li><a href="#photo">Change Photo</a></li>
                                <li><a href="#settings">Settings</a></li>
                            </ul>
                        </nav>

                        <section id="bio">
                            <p>Edit your Bio :</p>
                            <div class="form-inline">
                                <div class="form-group">
                                    <p class="setting">
                                        <span>Your ID</span>
                                        <b class="form-control"><?php echo $id;?></b>
                                    </p>
                                </div>
                            </div>
                            <form class="form-inline" action="<?php echo base_url('C_Profile/update_nik/'.$id)?>" method="post">
                                <div class="form-group">
                                    <p class="setting">
                                        <span>NIK
                                            <button type="submit"><img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></button>
                                        </span>
                                        <input class="form-control" name="nik" required type="number" value="<?php echo $this->session->userdata('nik');?>">
                                    </p>
                                </div>
                            </form>
                            <form class="form-inline" action="<?php echo base_url('C_Profile/update_nama/'.$id)?>" method="post">
                                <div class="form-group">
                                    <p class="setting">
                                        <span>Name
                                            <button type="submit"><img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></button>
                                        </span>
                                        <input class="form-control" name="name" required type="text" value="<?php echo $this->session->userdata('nama');?>">
                                    </p>
                                </div>
                            </form>
                            <form class="form-inline" action="<?php echo base_url('C_Profile/update_email/'.$id)?>" method="post">
                                <div class="form-group">
                                    <p class="setting">
                                        <span>Email
                                            <button type="submit"><img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></button>
                                        </span>
                                        <input class="form-control" required name="email" type="email" value="<?php echo $this->session->userdata('email');?>">
                                    </p>
                                </div>
                            </form>
                            <form class="form-inline" action="<?php echo base_url('C_Profile/update_address/'.$id)?>" method="post">
                                <div class="form-group">
                                    <p class="setting">
                                        <span>Address
                                            <button type="submit"><img src='<?php echo base_url();?>assets/back/profile/images/edit.png' alt='Edit'></button>
                                        </span>
                                        <input class="form-control" required name="address" type="text" value="<?php echo $this->session->userdata('alamat');?>">
                                    </p>
                                </div>
                            </form>
                        </section>

                        <section id="cpassword" class="hidden">
                            <p>Change your Password :</p>
                            <form action="<?php echo base_url('C_Profile/update_password/'.$id)?>" method="post">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <p class="setting">
                                            <span>Current Password</span>
                                            <input class="form-control" required type="password" name="current">
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p class="setting">
                                            <span>New Password</span>
                                            <input class="form-control" required type="password" name="new">
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p class="setting">
                                            <span>Confirm Password</span>
                                            <input class="form-control" required type="password" name="confirm">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="reset">Clear</button>
                                    </div>
                                </div>
                            </form>
                        </section>

                        <section id="photo" class="hidden">
                            <p>Change Photo:</p>
                            <form action="<?php echo base_url('C_Profile/update_photo/'.$id)?>" method="post" enctype="multipart/form-data">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <p class="setting">
                                            <span></span>
                                            <input class="form-control" required type="file" name="foto">
                                        </p>
                                    </div>
                                </div>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="reset">Clear</button>
                                    </div>
                                </div>
                            </form>                        </section>

                        <section id="settings" class="hidden">
                            <p>Edit your user settings:</p>
                            <form action="<?php echo base_url('C_Profile/delete/'.$id)?>" method="post">
                                <div class="form-inline">
                                    <div class="form-group">
                                        <p class="setting">
                                            <span>Delete your account</span>
                                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div><!-- @end #content -->
                    <div class="card-footer">

                    </div>
                </div><!-- @end #w -->
                <script type="text/javascript">
                    $(function(){
                        $('#profiletabs ul li a').on('click', function(e){
                            e.preventDefault();
                            var newcontent = $(this).attr('href');

                            $('#profiletabs ul li a').removeClass('sel');
                            $(this).addClass('sel');

                            $('#content section').each(function(){
                                if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
                            });

                            $(newcontent).removeClass('hidden');
                        });
                    });
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
<?php
$this->load->view("back/parts/V_Footer");
?>

