<!doctype html>
<html>
<head>
    <!-- Title -->
    <title><?php echo $title;?></title>

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
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning</strong>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('failed'); ?>
            </div>
        <?php } ?>
        <br><br>
        <form action="<?php echo base_url('C_Login/forget_auth_form/');echo $id?>" method="post">
            <div class="agileinfo">
                <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>
            <div class="agileinfo">
                <input type="password" class="lock" name="repassword" placeholder="Repeat Password" id="password2" required="">
            </div>
            <input type="submit" class="register" value="Submit">
        </form>
    </div>
    <div class="clear"></div>
</div>

</body>
</html>