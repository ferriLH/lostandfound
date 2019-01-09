<?php
$this->load->view("back/parts/V_Header");
$this->load->view("back/parts/V_Navigation");

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
                        <div id="userphoto"><img width="200px" src="<?php echo base_url();?>/foto_user/<?php echo $this->session->userdata('file_foto');?>" alt="<?php echo $this->session->userdata('nama');?>"></div>
                        <h1>Minimal User Profile Layout</h1>

                        <nav id="profiletabs">
                            <ul class="clearfix">
                                <li><a href="#bio" class="sel">Bio</a></li>
                                <li><a href="#activity">Activity</a></li>
                                <li><a href="#friends">Friends</a></li>
                                <li><a href="#settings">Settings</a></li>
                            </ul>
                        </nav>

                        <section id="bio">
                            <p>Various content snippets courtesy of <a href="http://bluthipsum.com/">Bluth Ipsum</a>.</p>

                            <p>Can't a guy call his mother pretty without it seeming strange? Amen. I think that's one of Mom's little fibs, you know, like I'll sacrifice anything for my children.</p>

                            <p>She's always got to wedge herself in the middle of us so that she can control everything. Yeah. Mom's awesome. I run a pretty tight ship around here. With a pool table.</p>
                        </section>

                        <section id="activity" class="hidden">
                            <p>Most recent actions:</p>

                            <p class="activity">@10:15PM - Submitted a news article</p>

                            <p class="activity">@9:50PM - Submitted a news article</p>

                            <p class="activity">@8:15PM - Posted a comment</p>

                            <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>

                            <p class="activity">@12:30PM - Submitted a news article</p>
                        </section>

                        <section id="friends" class="hidden">
                            <p>Friends list:</p>

                            <ul id="friendslist" class="clearfix">
                                <li><a href="#"><img alt src="<?php echo base_url();?>assets/back/profile/images/avatar.png" width="22" height="22"> Username</a></li>
                                <li><a href="#"><img alt src="<?php echo base_url();?>assets/back/profile/images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
                                <li><a href="#"><img alt src="<?php echo base_url();?>assets/back/profile/images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
                            </ul>
                        </section>

                        <section id="settings" class="hidden">
                            <p>Edit your user settings:</p>

                            <p class="setting"><span>E-mail Address <img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></span> lolno@gmail.com</p>

                            <p class="setting"><span>Language <img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></span> English(US)</p>

                            <p class="setting"><span>Profile Status <img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></span> Public</p>

                            <p class="setting"><span>Update Frequency <img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></span> Weekly</p>

                            <p class="setting"><span>Connected Accounts <img src="<?php echo base_url();?>assets/back/profile/images/edit.png" alt="*Edit*"></span> None</p>
                        </section>
                    </div><!-- @end #content -->
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

