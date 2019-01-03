
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="dorne-load"></div>
</div>

<!-- ***** Search Form Area ***** -->
<div class="dorne-search-form d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-close-btn" id="closeBtn">
                    <i class="pe-7s-close-circle" aria-hidden="true"></i>
                </div>
                <form action="#" method="get">
                    <input type="search" name="caviarSearch" id="search" placeholder="Search">
                    <input type="submit" class="d-none" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo base_url('')?>"><img src="<?php echo base_url('assets/front/img/core-img/logo.png')?>" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="dorneNav">
                        <ul class="navbar-nav mr-auto" id="dorneMenu">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url('')?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url('')?>">Home</a>
                                    <a class="dropdown-item" href="<?php echo base_url('explore')?>">Explore</a>
                                    <a class="dropdown-item" href="<?php echo base_url('listing')?>">Listing</a>
                                    <a class="dropdown-item" href="<?php echo base_url('slisting')?>">Single Listing</a>
                                    <a class="dropdown-item" href="<?php echo base_url('contact')?>">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="<?php echo base_url('')?>">Home</a>
                                    <a class="dropdown-item" href="<?php echo base_url('explore')?>">Explore</a>
                                    <a class="dropdown-item" href="<?php echo base_url('listing')?>">Listing</a>
                                    <a class="dropdown-item" href="<?php echo base_url('slisting')?>">Single Listing</a>
                                    <a class="dropdown-item" href="<?php echo base_url('contact')?>">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('contact')?>">Contact</a>
                            </li>
                        </ul>
                        <!-- Search btn -->
                        <div class="dorne-search-btn">
                            <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                        </div>
                        <!-- Signin btn -->
                        <div class="dorne-signin-btn">
                            <a href="<?php echo base_url('login')?>">Sign in  and Register</a>
                        </div>
                        <!-- Add listings btn -->
                        <div class="dorne-add-listings-btn">
                            <a href="#" class="btn dorne-btn">+ Add Listings</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
