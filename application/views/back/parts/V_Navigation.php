<?php
$id     = $this->session->userdata('id_user');
$nik    = $this->session->userdata('nik');
$nama   = $this->session->userdata('nama');
$email  = $this->session->userdata('email');
$alamat = $this->session->userdata('alamat');
$status = $this->session->userdata('status');
?>
<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop4">
        <div class="container">
            <div class="header4-wrap">
                <div class="header__logo">
                    <a href="<?php echo base_url('dashboard');?>">
                        <img src="<?php echo base_url();?>/assets/front/img/core-img/lf.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__tool">
                    <div class="header-button-item has-noti js-item-menu">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown js-dropdown">
                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo base_url();?>/assets/back/CoolAdmin-master/images/icon/avatar-01.jpg" alt="" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $nama;?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo base_url();?>/assets/back/CoolAdmin-master/images/icon/avatar-01.jpg" alt="<?php echo $nama;?>" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $nama;?></a>
                                        </h5>
                                        <span class="email"><?php echo $email;?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="<?php echo base_url('profile');?>">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="<?php echo base_url('logout');?>">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP -->
    <?php
    if($this->uri->segment(1)=='profile'){
        ?>

    <?php
    }else{
    ?>
    <!-- WELCOME-->
    <section class="welcome2 p-t-40 p-b-55">
        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="welcome2-inner m-t-60">
                        <div class="welcome2-greeting">
                            <h1 class="title-6">Hi
                                <span><?php echo $nama;?></span>, Welcome back</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <form class="form-header form-header2" action="" method="post">
                            <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->
        <?php
    }
    ?>
    <!-- PAGE CONTENT-->
    <div class="page-container3">
        <section class="alert-wrap p-t-35 p-b-35">
            <div class="container">

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <!-- MENU SIDEBAR-->
                        <aside class="menu-sidebar3 js-spe-sidebar">
                            <nav class="navbar-sidebar2 navbar-sidebar3">
                                <ul class="list-unstyled navbar__list">
                                    <li class="<?php if($this->uri->segment(1)=='dashboard'){echo 'active';}?> has-sub">
                                        <a class="js-arrow" href="<?php echo base_url('dashboard')?>">
                                            <i class="fas fa-tachometer-alt"></i>Dashboard
                                        </a>
                                    </li>
                                    <li class="<?php if($this->uri->segment(1)=='profile'){echo 'active';}?> has-sub">
                                        <a class="js-arrow" href="<?php echo base_url('profile')?>">
                                            <i class="fas fa-user"></i>Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>/assets/back/CoolAdmin-master/inbox.html">
                                            <i class="fas fa-chart-bar"></i>Inbox</a>
                                        <span class="inbox-num">3</span>
                                    </li>
                                    <li class="has-sub">
                                        <a class="js-arrow" href="# ">
                                            <i class="fas fa-box"></i>Stuffs
                                            <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                        </a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="<?php echo base_url();?>">
                                                    <i class="fas fa-plus"></i>Add</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>">
                                                    <i class="fas fa-edit"></i>Edit</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </aside>
                        <!-- END MENU SIDEBAR-->
                    </div>

