<!doctype html>
<html>
<head>
    <!-- Title -->
    <title>LF</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/front/img/core-img/favicon.ico')?>">

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
    <script src="<?php echo base_url('assets/sign/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/sign/js/jquery-3.2.1.min.js')?>"></script>


</head>
<body>
<h1 class="w3ls">LOGIN</h1>
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
        <form action="<?php echo base_url('login/auth')?>" method="post">
            <div class="w3layouts">
                <input type="text" id="firstname" name="username" placeholder="Username or email" title="Please enter your username or email" required="">
            </div>

            <div class="agileinfo">
                <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>

            <input type="submit" class="register" value="Login">
        </form>
        <ul class="social-agileinfo wthree2">

            <li><a href="<?php echo base_url('')?>"><i class="fa fa-caret-left" data-toggle="tooltip" title="Back"></i></a></li>
            <li><a href="<?php echo base_url('signup')?>"><i class="fa fa-caret-right" data-toggle="tooltip" title="Sign Up"></i></a></li>
        </ul>
        <br>
        <p class="wthree w3l">Signup With Your Favourite Social Profile</p>
        <ul class="social-agileinfo wthree2">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>

</body>
</html>