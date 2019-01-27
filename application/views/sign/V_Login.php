<!doctype html>
<html>
<head>
    <!-- Title -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/front/img/core-img/favicon.png')?>">
    <style>
        a.txt1 {
            font-family: ;
            font-size: 14px;
            line-height: 1.7;
            color: #999;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a.txt1:focus {
            outline: none !important;
        }

        a.txt1:hover {
            text-decoration: none;
            color: #fff
        }
        .txt1 {
            padding-right: 20px ;
            float: right;
            font-size: 13px;
            line-height: 1.4;
            color: #999;
        }
        a.txt2 {
            font-family: ;
            font-size: 14px;
            line-height: 1.7;
            color: #999;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a.txt2:focus {
            outline: none !important;
        }

        a.txt2:hover {
            text-decoration: none;
            color: #fff
        }
        .txt2 {
            padding-left: 20px ;
            float: left;
            font-size: 13px;
            line-height: 1.4;
            color: #999;
        }
        div.relative {
            position: relative;
            width: 100%;
            top: 100%;
        }
        button.register {
            position: relative;
            top: -50px;
            width: 335px;
            margin: 60px auto;
            display: block;
            height: 50px;
            text-align: center;
            font-size: 17px;
            font-weight: normal;
            color: #fff;
            background-color:#b32d00;
            border-color: transparent;
            font-family: 'Raleway', sans-serif;
            /*-- w3ls --*/
            transition:all 0.5s ease-in-out;
            -webkit-transition:all 0.5s ease-in-out;
            -moz-transition:all 0.5s ease-in-out;
            -o-transition:all 0.5s ease-in-out;
            -ms-transition:all 0.5s ease-in-out;
            cursor:pointer;
        }
        button.register:hover {
            text-decoration: none;
            color: #fff;
            background-color:#3970b0;
        }
    </style>
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
        <div style="position: relative; text-align: center;padding: 50px 0">
            <form action="<?php echo base_url('login/auth')?>" method="post">
                <div class="w3layouts">
                    <input type="text" id="firstname" name="username" placeholder="Username or email" title="Please enter your username or email" required="">
                </div>
                <div class="agileinfo">
                    <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
                </div>
                <input type="submit" class="register" value="Login">
            </form>
            <a href="<?php echo base_url('signup');?>"><button class="register">Register</button></a>
        </div>
        <div class="relative">
            <a class="txt2" href="<?php echo base_url('')?>">
                <i class="fa fa-caret-left" data-toggle="tooltip" title="Back"></i> Back
            </a>
            <a class="txt1" href="<?php echo base_url('forget_pass');?>">Forget Password</a>
        </div>

<!--        <ul class="social-agileinfo wthree2">-->
<!--            <li>-->
<!--                <a href="--><?php //echo base_url('')?><!--">-->
<!--                    <i class="fa fa-caret-left" data-toggle="tooltip" title="Back"></i>-->
<!--                </a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="--><?php //echo base_url('signup')?><!--">-->
<!--                    <i class="fa fa-user-plus" data-toggle="tooltip" title="Sign Up"></i>-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
    </div>
    <div class="clear">

    </div>
</div>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/back/CoolAdmin-master/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>