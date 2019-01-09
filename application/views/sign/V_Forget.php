<!doctype html>
<html>
<head>
    <!-- Title -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/front/img/core-img/favicon.png')?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="<?php echo base_url('assets/sign/')?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url('assets/sign/')?>css/style2.css" rel='stylesheet' type='text/css' media="all" />
    <link href="<?php echo base_url('assets/sign/')?>css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
    <!-- /css -->
</head>
<body>
<h1 class="w3ls">Forget Password</h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1">LF</h2>
        <p class="agileits2"></p>
    </div>
    <div class="content-agile2">
        <?php
        if (validation_errors() || $this->session->flashdata('failed')) {
            ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('failed'); ?>
            </div>
        <?php } ?>
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
        if (validation_errors() || $this->session->flashdata('email_sent')) {
            ?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning</strong>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('email_sent'); ?>
            </div>
        <?php } ?>
        <br><br>
        <form action="<?php echo base_url('login/forget_auth')?>" method="post">
            <div class="w3layouts">
                <input type="email" id="email" name="email" placeholder="Please enter your email" title="Please enter your email" required="">
            </div>
            <input type="submit" class="register" value="Submit">

        </form>
        <ul class="social-agileinfo wthree2">
            <li><a href="<?php echo base_url('login')?>"><i class="fa fa-caret-left" data-toggle="tooltip" title="Back"></i></a></li>
        </ul>
    </div>
    <div class="clear">

    </div>
</div>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>