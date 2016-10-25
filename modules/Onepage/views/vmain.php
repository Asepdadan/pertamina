<html>
    <head>
        <title>Kementerian Pendidikan dan Kebudayaan</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kementrian Pendidikan dan Budaya">
        <meta name="author" content="Penaorange">

        <link href="<?php echo base_url($murl . 'views/css/bootstrap.min.css') ?>" rel="stylesheet">

        <link href="<?php echo base_url($murl . 'views/font-awesome/css/font-awesome.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url($murl . 'views/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">

        <!-- jQuery (Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url($murl . 'views/js/jquery.min.js'); ?>"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url($murl . 'views/css/styles.css'); ?>" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <link href="<?php echo base_url($murl . 'views/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />

    </head>
    <body>

        <!-- Navbar -->
        <!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. You can also use modifier class like: "navbar-light" to change navbar apperance. The screen width at which navbar collapses can be controlled through the variable "$nav-collapse" in sass/variables.scss -->
        <header class="navbar navbar-light navbar-sticky">
            <div class="container">
                <a href="#" class="site-logo">
                    <img src="<?php echo base_url($murl . 'views/images/kemdikbud.png'); ?>" class="logo-default" alt="KEMENDIKBUD">
                    <img src="<?php echo base_url($murl . 'views/images/kemdikbud.png'); ?>" class="logo-alt" alt="KEMENDIKBUD">
                </a><!-- .site-logo -->

                <!-- Mobile Menu Toggle -->
                <div class="nav-toggle"><span></span></div>

                <div class="clearfix">

                    <div class="toolbar text-right">
                        <a href="#" class="btn btn-sm btn-ghost btn-default scroll-to" data-offset-top="-40">PELAJARI!</a>
                        <a href="#" class="btn btn-sm btn-danger scroll-to" data-offset-top="70">MASUK</a>
                    </div><!-- .toolbar -->

                    <!-- Use modifier class to apply different submenu (dropdown) animations. Possible options: .submenu-slideUp, .submenu-slideDown, .submenu-flipIn. Please note if no class added to .main-navigation default fadeIn animation will be applied. Note: this is applicable only for Desktop. -->
                    <nav class="main-navigation submenu-flipIn">
                        <ul class="menu">
                            <li class="current"><a href="#">Beranda</a></li>
                            <li class="has-submenu"><a href="#">Siswa</a>
                                <ul class="submenu">
                                    <li><a target="_blank" href="http://beasiswaunggulan.kemdiknas.go.id/">Beasiswa Unggulan</a></li>
                                    <li><a target="_blank" href="http://darmasiswa.kemdikbud.go.id/darmasiswa/">Darmasiswa</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/glosarium/">Glosarium Bahasa Indonesia</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/kbbi/">Kamus Besar Bahasa Indonesia (KBBI)</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="http://sisdukcapil.com/index.html#">Guru</a>
                                <ul class="submenu">
                                    <li><a target="_blank" href="http://beasiswaunggulan.kemdiknas.go.id/">Beasiswa Unggulan</a></li>
                                    <li><a target="_blank" href="http://darmasiswa.kemdikbud.go.id/darmasiswa/">Darmasiswa</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/glosarium/">Glosarium Bahasa Indonesia</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/kbbi/">Kamus Besar Bahasa Indonesia (KBBI)</a></li>
                                </ul>
                            </li>
                            <li><a href="http://ask.sisdukcapil.com/" target="_blank">Orang Tua</a></li>
                            <li class="has-submenu"><a href="http://sisdukcapil.com/index.html#">Pemerintah Daerah</a>
                                <ul class="submenu">
                                    <li><a target="_blank" href="http://beasiswaunggulan.kemdiknas.go.id/">Beasiswa Unggulan</a></li>
                                    <li><a target="_blank" href="http://darmasiswa.kemdikbud.go.id/darmasiswa/">Darmasiswa</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/glosarium/">Glosarium Bahasa Indonesia</a></li>
                                    <li><a target="_blank" href="http://badanbahasa.kemdikbud.go.id/kbbi/">Kamus Besar Bahasa Indonesia (KBBI)</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- .main-navigation -->
                </div><!-- .clearfix -->
            </div><!-- .container -->
        </header><!-- .navbar -->

        <!-- Device Slider -->
        <section class="device-slider">
            <span class="angle"></span>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 padding-top mobile-center">
                        <div class="block-title light-skin">
                            <h2>The standard Lorem Ipsum passage</h2>
                        </div>
                        <p class="text-light">Quisque libero metus, viverra ut sapien vitae, accumsan posuere lacus. Donec est felis, aliquam nec eros consectetur, tincidunt egestas ante. Fusce nec elit a nulla egestas pharetra. Maecenas eu mattis felis. Praesent congue enim sit amet velit feugiat imperdiet. Aenean hendrerit purus nisl, ut tincidunt ex vestibulum non. Cras at elit nisl. Vestibulum elementum id lacus et rhoncus. </p>
                    </div>
                    <div class="col-sm-5">
                        <!--                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                     Indicators 
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                                    </ol>
                        
                                                     Wrapper for slides 
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <div class="foto">
                                                                <img alt="Kemdikbud" src="<?php echo base_url($murl . 'views/images/1.jpg'); ?>" width="800" height="420">
                                                            </div> 
                                                        </div>
                        
                                                        <div class="item">
                                                            <div class="foto">
                                                                <img alt="Kemdikbud" src="<?php echo base_url($murl . 'views/images/2.jpg'); ?>" width="800" height="420">
                                                            </div> 
                                                        </div>
                        
                                                        <div class="item">
                                                            <div class="foto">
                                                                <img alt="Kemdikbud" src="<?php echo base_url($murl . 'views/images/3.jpg'); ?>" width="800" height="420">
                                                            </div> 
                                                        </div>
                        
                                                        <div class="item">
                                                            <div class="foto">
                                                                <img alt="Kemdikbud" src="<?php echo base_url($murl . 'views/images/4.jpg'); ?>" width="800" height="420">
                                                            </div> 
                                                        </div>
                                                    </div>
                        
                                                     Left and right controls 
                                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>-->

                        <div class="phone-carousel" data-loop="true" data-autoplay="true" data-interval="4000">
                            <img src="<?php echo base_url($murl . 'views/images/phone.png'); ?>" class="phone-mask" alt="Phone">
                            <!-- Fallback Cover Screen -->
                            <div class="cover">
                                <img src="<?php echo base_url($murl . 'views/images/screen01.png'); ?>">
                            </div>
                            <div class="carousel">
                                <div class="inner owl-carousel owl-theme owl-loaded">
                                    <div style="height: 414px;" class="owl-stage-outer owl-height"><div style="transform: translate3d(-1398px, 0px, 0px); transition: all 0.25s ease 0s; width: 1864px;" class="owl-stage"><div style="width: 233px; margin-right: 0px;" class="owl-item cloned"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen03.png" alt="Screen 3"></div><div style="width: 233px; margin-right: 0px;" class="owl-item cloned"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen04.png" alt="Screen 4"></div><div style="width: 233px; margin-right: 0px;" class="owl-item"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen01.png" alt="Screen 1"></div><div style="width: 233px; margin-right: 0px;" class="owl-item"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen02.png" alt="Screen 2"></div><div style="width: 233px; margin-right: 0px;" class="owl-item"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen03.png" alt="Screen 3"></div><div style="width: 233px; margin-right: 0px;" class="owl-item"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen04.png" alt="Screen 4"></div><div style="width: 233px; margin-right: 0px;" class="owl-item cloned active"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen01.png" alt="Screen 1"></div><div style="width: 233px; margin-right: 0px;" class="owl-item cloned"><img src="SISDUKCAPIL%20_%20Birokrasi%20dalam%20Genggaman_files/screen02.png" alt="Screen 2"></div></div></div><div class="owl-controls"><div class="owl-nav"><div style="display: none;" class="owl-prev"></div><div style="display: none;" class="owl-next"></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                            </div>
                        </div><!-- .phone-carousel -->
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .device-slider -->
        <section class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-title featured-title">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <i> consectetur adipiscing elit.</i>
                        </div><!-- .block-title.featured-title -->

                    </div> 
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                            Sed eu ex ac lectus maximus suscipit vel nec nibh. Praesent aliquam consectetur nibh, 
                            vitae varius ipsum eleifend vel. Donec sagittis sapien ac consequat aliquet. 
                            Quisque eleifend lobortis accumsan. Nunc a eros nec urna vestibulum elementum. 
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                            Sed eu ex ac lectus maximus suscipit vel nec nibh. Praesent aliquam consectetur nibh, 
                            vitae varius ipsum eleifend vel. Donec sagittis sapien ac consequat aliquet. 
                            Quisque eleifend lobortis accumsan. Nunc a eros nec urna vestibulum elementum. 
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                            Sed eu ex ac lectus maximus suscipit vel nec nibh. Praesent aliquam consectetur nibh.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="fw-section parallax-bg padding-top-3x padding-bottom-3x" style="background-image: url(<?php echo base_url($murl . 'views/images/4.jpg'); ?>);">
            <span class="overlay" style="opacity: .77;"></span>
            <div class="container padding-top text-center">
                <div class="clients-carousel space-top-2x space-bottom-3x" data-loop="true" data-autoplay="true" data-interval="4000">
                    <div class="row space-bottom">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-light">
                            <h2 class="text-light">quisquam<br>Neque porro quisquam</h2>
                        </div>
                    </div><!-- .row -->
                </div><!-- .clients-carousel -->
            </div><!-- .container -->
        </section><!-- .fw-section.parallax-bg -->
        <section class="fw-section gray-bg angle-top mobile-center">
            <div class="container padding-top-3x padding-bottom-3x">
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Block Title -->
                        <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
                        <div class="block-title featured-title double-strike">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <i> consectetur adipiscing elit.</i>
                        </div><!-- .block-title.featured-title -->
                    </div><!-- .col-lg-9.col-md-10 -->
                </div><!-- .row -->

                <!-- Features -->
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4">
                        <!-- Icon Block -->
                        <!-- Apply modifier classes to ".icon-block": ".text-center" and "text-right" - for alignment. -->
                        <section class="icon-block">
                            <i class="pe-7s-display1"></i>
                            <h3 class="ib-title">eiusmod temp</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                                Sed eu ex ac lectus maximus suscipit vel nec nibh.
                            </p>
                        </section><!-- .icon-block -->
                    </div><!-- .col-lg-3.col-md-4.col-sm-4 -->
                    <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
                        <section class="icon-block">
                            <i class="pe-7s-phone"></i>
                            <h3 class="ib-title">eiusmod temp</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                                Sed eu ex ac lectus maximus suscipit vel nec nibh.
                            </p>
                        </section><!-- .icon-block -->
                    </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->

                    <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
                        <section class="icon-block">
                            <i class="pe-7s-cloud"></i>
                            <h3 class="ib-title">eiusmod temp</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer condimentum ante mauris, et pulvinar magna imperdiet at. 
                                Sed eu ex ac lectus maximus suscipit vel nec nibh.
                            </p>
                        </section><!-- .icon-block -->
                    </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->
                </div><!-- .row -->


            </div><!-- .container -->
        </section><!-- .fw-section -->
        <section class="footer">
            <div class="container">
                <p class="text-muted">© 2016 PT. Meisys Co Design</p>
            </div>
        </section>
        <script src="<?php echo base_url($murl . 'views/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url($murl . 'views/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url($murl . 'views/js/scripts.js') ?>"></script>
    </body>
</html>


