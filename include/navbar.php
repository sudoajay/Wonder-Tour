<?php
  $path = $_SERVER['REQUEST_URI'];
  $path = explode('/',$path);
  $path = end($path)
 ?>
<div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand-->
                                    <a class="brand" href="index.php"><img src="images-1/logo-default-450x37.png" alt="" width="225" height="18" /></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                    <li>
                                        <a class="icon fa fa-facebook" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-twitter" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-google-plus" href="#"></a>
                                    </li>
                                    <li>
                                        <a class="icon fa fa-instagram" href="#"></a>
                                    </li>
                                    <li><a href="">log in</a></li>
                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li  class="rd-nav-item <?php if($path == 'index.php') { echo 'active';} ?>"><a class="rd-nav-link" href="index.php">Home</a>
                                    </li>
                                    <li  class="rd-nav-item <?php if($path == 'about.php') { echo 'active';} ?>"><a class="rd-nav-link" href="about.php">About</a>
                                    </li>
                                    <li  class="rd-nav-item <?php if($path == 'domestic-tour.php') { echo 'active';} ?>"><a class="rd-nav-link" href="domestic-tour.php">Domestic Tour</a>
                                    </li>
                                    <li  class="rd-nav-item <?php if($path == 'international-tour.php') { echo 'active';} ?>"><a class="rd-nav-link" href="international-tour.php">International Tour</a>
                                    </li>

                                    <li  class="rd-nav-item <?php if($path == 'contact-us.php') { echo 'active';} ?>"><a class="rd-nav-link" href="contact-us.php">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>