<!DOCTYPE html><html ><head>
    <meta charset="UTF-8">
    <title>Body Art | Pocetna </title>
    <!-- Stylesheets -->
    <link href="bootstrap.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">

    <!-- Color Switcher Mockup -->
    <link href="color-switcher-design.css" rel="stylesheet">

    <!-- Color Themes -->
    <link id="theme-color-file" href="brown-theme.css" rel="stylesheet">

    <link href="css2.css" rel="stylesheet">

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    
    <style>
        .glow {
            color: #fff;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #341382, 0 0 40px #341382, 0 0 50px #341382, 0 0 60px #341382, 0 0 70px #341382;
            }
  
            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #290f68, 0 0 40px #290f68, 0 0 50px #290f68, 0 0 60px #290f68, 0 0 70px #290f68, 0 0 80px #290f68;
            }
        }
    </style>
</head>

<body class="hidden-bar-wrapper">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader" style="display: none;"></div>

        <!-- Main Header-->
        <header class="main-header header-style-two fixed-header">

            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="clearfix">

                        <!-- Top Left -->
                        <div class="top-left pull-left">
                            <!-- Info List -->
                            <ul class="info-list">
                                <li><span class="icon fa fa-location-arrow"></span> Kolodvorska 12, Sarajevo</li>
                                <li><span class="icon fa fa-phone"></span> <a href="tel:+387 61 182 170"> +387 61 182
										170</a></li>
                                <li><span class="icon fa fa-envelope-o"></span> <a href="mailto:info@bodyart.ba">
										info@bodyart.ba</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo">
                            <a href=""><img src="logo-body-art.jpg" alt="" title="" style="width: 230px; height:100px;"></a>
                        </div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="">Početna</a>

                                    </li>
                                    <li><a href="http://www.bodyart.ba/o-nama.html">O nama</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Naše usluge</a>
                                        <ul>
                                            <li><a href="">Raspored treninga</a></li>
                                            <li><a href="">Personalni treneri</a></li>
                                            <li><a href="">Grupni treninzi</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li><a href="">Galerija</a>
                                    </li>
                                    <li><a href="">Cjenovnik</a>



                                    </li>
                                    <li><a href="">Kontakt</a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>

                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header" style="position: fixed; width: 100%; top: 0px;">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="" title=""><img src="logo-body-art.jpg" alt="" title="" style="width: 125px;height: 55px;"></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="">Početna</a>

                                    </li>
                                    <li><a href="">O nama</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Naše usluge</a>
                                        <ul>
                                            <li><a href="">Raspored treninga</a></li>
                                            <li><a href="">Personalni treneri</a></li>
                                            <li><a href="">Grupni treninzi</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li><a href="">Galerija</a>
                                    </li>
                                    <li><a href="">Cjenovnik</a>



                                    </li>
                                    <li><a href="">Kontakt</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

                <nav class="menu-box mCustomScrollbar _mCS_1 mCS_no_scrollbar"><div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 724px;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="nav-logo">
                        <a href=""><img src="logo-body-art.jpg" alt="" title="" style="width: 175px;height: 80px;" class="mCS_img_loaded"></a>
                    </div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="">Početna</a>

                                    </li>
                                    <li><a href="">O nama</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Naše usluge</a>
                                        <ul>
                                            <li><a href="">Raspored treninga</a></li>
                                            <li><a href="">Personalni treneri</a></li>
                                            <li><a href="">Grupni treninzi</a></li>
                                        </ul>
                                    <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
                                    <li><a href="">Galerija</a>
                                    </li>
                                    <li><a href="">Cjenovnik</a>



                                    </li>
                                    <li><a href="">Kontakt</a></li>
                                </ul>
                            </div>
                        </div>
                </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->
        <!--Main Slider-->
        <section class="main-slider-two">

            <div class="main-slider-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">

                

                



            <div class="owl-stage-outer owl-height" style="height: 989px;"><div class="owl-stage" style="transform: translate3d(3852px, 0px, 0px); transition: all 0s ease 0s; width: 7704px;"><div class="owl-item cloned" style="width: 1284px;"><div class="slide" style="background-image:url(&quot;naslovnica1.jpg&quot;)">
                    <div class="pattern-layer" style="background-image:url(&quot;naslovnica-png.png&quot;)"></div>
                    <div class="pattern-dots" style="background-image:url(&quot;dots.png&quot;)"></div>
                    <div class="auto-container">

                        <!-- Content boxed -->
                        <div class="content-boxed">
                            <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1 class="glow">  18 <br> godina <br>  sa Vama <br></h1>
                            <div class="link-box clearfix">
                                <div class="btn-one-outer"><a href="" class="theme-btn btn-style-one "><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>

                    </div>
                </div></div><div class="owl-item cloned" style="width: 1284px;"><div class="slide " style="background-image:url(&quot;naslovnica2.jpg&quot;) ">
                    <div class="pattern-layer " style="background-image:url(&quot;naslovnica-png.png&quot;) "></div>
                    <div class="pattern-dots " style="background-image:url(&quot;dots.png&quot;) "></div>
                    <div class="auto-container ">
                        <!-- Content boxed -->
                        <div class="content-boxed ">
                             <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1>Gdje <br> zdrav život <br>stanuje</h1>
                            <div class="link-box clearfix ">
                                <div class="btn-one-outer "><a href="" class="theme-btn btn-style-one"><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 1284px;"><div class="slide" style="background-image:url(&quot;naslovnica1.jpg&quot;)">
                    <div class="pattern-layer" style="background-image:url(&quot;naslovnica-png.png&quot;)"></div>
                    <div class="pattern-dots" style="background-image:url(&quot;dots.png&quot;)"></div>
                    <div class="auto-container">

                        <!-- Content boxed -->
                        <div class="content-boxed">
                            <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1 class="glow">  18 <br> godina <br>  sa Vama <br></h1>
                            <div class="link-box clearfix">
                                <div class="btn-one-outer"><a href="" class="theme-btn btn-style-one "><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>

                    </div>
                </div></div><div class="owl-item active" style="width: 1284px;"><div class="slide " style="background-image:url(&quot;naslovnica2.jpg&quot;) ">
                    <div class="pattern-layer " style="background-image:url(&quot;naslovnica-png.png&quot;) "></div>
                    <div class="pattern-dots " style="background-image:url(&quot;dots.png&quot;) "></div>
                    <div class="auto-container ">
                        <!-- Content boxed -->
                        <div class="content-boxed ">
                             <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1>Gdje <br> zdrav život <br>stanuje</h1>
                            <div class="link-box clearfix ">
                                <div class="btn-one-outer "><a href="" class="theme-btn btn-style-one"><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 1284px;"><div class="slide" style="background-image:url(&quot;naslovnica1.jpg&quot;)">
                    <div class="pattern-layer" style="background-image:url(&quot;naslovnica-png.png&quot;)"></div>
                    <div class="pattern-dots" style="background-image:url(&quot;dots.png&quot;)"></div>
                    <div class="auto-container">

                        <!-- Content boxed -->
                        <div class="content-boxed">
                            <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1 class="glow">  18 <br> godina <br>  sa Vama <br></h1>
                            <div class="link-box clearfix">
                                <div class="btn-one-outer"><a href="" class="theme-btn btn-style-one "><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>

                    </div>
                </div></div><div class="owl-item cloned" style="width: 1284px;"><div class="slide " style="background-image:url(&quot;naslovnica2.jpg&quot;) ">
                    <div class="pattern-layer " style="background-image:url(&quot;naslovnica-png.png&quot;) "></div>
                    <div class="pattern-dots " style="background-image:url(&quot;dots.png&quot;) "></div>
                    <div class="auto-container ">
                        <!-- Content boxed -->
                        <div class="content-boxed ">
                             <h4 style="color:white;">Svi naši članovi uživaju pravo na <br> 2:30 sata besplatnog parkinga</h4>
                            <h1>Gdje <br> zdrav život <br>stanuje</h1>
                            <div class="link-box clearfix ">
                                <div class="btn-one-outer "><a href="" class="theme-btn btn-style-one"><span class="txt ">Kontaktirajte nas</span></a></div>
                            </div>
                        </div>
                    </div>
                </div></div></div></div><div class="owl-nav"><div class="owl-prev"><span class="flaticon-back-1"></span></div><div class="owl-next"><span class="flaticon-arrow-pointing-to-right"></span></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>

            <!-- Social Box -->
            <div class="social-box ">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/Fitness-centar-Body-Art-277604478922506/" target="_blank " class="fa fa-facebook-f "></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/bodyart.ba/?hl=hr" target="_blank " class="fa fa-instagram "></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC-CKG8ONPMRXnzsECPl74Og" target="_blank " class="fa fa-youtube "></a>
                    </li>
                </ul>
            </div>

        </section>
        <!--End Main Slider-->



        <!-- Choose Section -->
        <section class="choose-section ">
            <div class="auto-container ">
                <div class="row clearfix ">

                    <!-- Images Column -->
                    <div class="images-column col-lg-6 col-md-12 col-sm-12 ">
                        <div class="inner-column ">
                            <div class="info-box ">
                                <h3><a href="">Grupni <br> Trening</a></h3>

                                <div class="icon flaticon-stationary-bike "></div>
                            </div>

                            <div class="info-box style-two ">
                                <h3><a href="">Lični <br> Trener</a></h3>

                                <div class="icon flaticon-people "></div>
                            </div>

                            <div class="image ">
                                <img src="body-art-1.jpg" alt=" ">
                            </div>
                            <div class="image-1 ">
                                <img src="body-art-2.jpg" alt=" ">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 ">
                        <div class="inner-column ">
                            <!-- Sec Title -->
                            <div class="sec-title ">
                                <div class="title ">Dobrodošli</div>
                                <h2>Mi podižemo <br> Samopouzdanje</h2>
                            </div>

                            <!-- Featured Block -->
                            <div class="featured-block ">
                                <div class="block-inner ">
                                    <span class="icon flaticon-people "></span>
                                    <strong>Trening program</strong>
                                    <div class="feature-text ">Izrada individualnog program treninga prema Vašim potrebama za svakog posjetioca je besplatna.</div>
                                </div>
                            </div>

                            <!-- Featured Block -->
                            <div class="featured-block ">
                                <div class="block-inner ">
                                    <span class="icon flaticon-stationary-bike "></span>
                                    <strong>Savremene sprave</strong>
                                    <div class="feature-text ">Fitness centar je opremljen dovoljnim brojem fitness sprava svjetski renomiranog brenda Technogym.</div>
                                </div>
                            </div>

                            <!-- Featured Block -->
                            <div class="featured-block ">
                                <div class="block-inner ">
                                    <span class="icon flaticon-premium "></span>
                                    <strong>Zadovoljni klijenti</strong>
                                    <div class="feature-text ">Čast nam je i profesionalni izazov da ugostimo svakoga ko želi da podigne nivo tjelesnih sposobnosti.</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Choose Section -->

        <!-- Featured Section -->
        <section class="featured-section ">
            <div class="auto-container ">
                <!-- Sec Title -->
                <div class="sec-title light centered ">
                    <div class="title ">NAŠE USLUGE</div>
                    
                </div>
                <div class="row clearfix ">

                    <!-- Featured Block Two -->
                    <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 ">
                        <div class="inner-box wow fadeInLeft  animated" data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image ">
                                <a href=""><img src="grupni-treninzi-hp.jpg" alt=" "></a>
                                <div class="icon-box ">
                                    <span class="icon flaticon-tools-and-utensils-1 "></span>
                                </div>
                            </div>
                            <div class="lower-content ">
                                <div class="title "></div>
                                <h4><a href="">Grupni treninzi</a></h4>
                                <div class="text ">Body Art vam nudi najraznovrsniju selekciju grupnih treninga za sve nivoe učesnika.</div>
                                <a class="read-more " href="">Saznaj više</a>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Block Two -->
                    <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 ">
                        <div class="inner-box wow fadeInUp  animated" data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="image ">
                                <a href=""><img src="personalni-treninzi-hp.jpg" alt=" "></a>
                                <div class="icon-box ">
                                    <span class="icon flaticon-muscle "></span>
                                </div>
                            </div>
                            <div class="lower-content ">
                                <div class="title "></div>
                                <h4><a href="">Personalni treninzi</a></h4>
                                <div class="text ">Ostvarite ciljeve uz personaliziran trening prilagođen i kreiran samo za Vas!</div>
                                <a class="read-more " href="">Saznaj više</a>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Block Two -->
                    <div class="featured-block-two col-lg-4 col-md-6 col-sm-12 ">
                        <div class="inner-box wow fadeInRight  animated" data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                            <div class="image ">
                                <a href=""><img src="savjeti-hp.jpg" alt=" "></a>
                                <div class="icon-box ">
                                    <span class="icon flaticon-people "></span>
                                </div>
                            </div>
                            <div class="lower-content ">
                                <div class="title "></div>
                                <h4><a href="">Raspored treninga</a></h4>
                                <div class="text ">Kultura tijela je temelj na kome se uzdižu sve čovjekove sposobnosti i funkcije. </div>
                                <a class="read-more " href="">Saznaj više</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Featured Section -->

        <!-- Counter Section -->
        <section class="counter-section margin-top ">
            <div class="auto-container ">
                <div class="inner-container ">
                    <div class="pattern-layer " style="background-image:url(&quot;1550x575.png&quot;) "></div>
                    <!-- Fact Counter -->
                    <div class="fact-counter ">
                        <div class="row clearfix ">

                            <!-- Column -->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12 ">
                                <div class="inner wow fadeInLeft  animated" data-wow-delay="0ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                                    <div class="content ">
                                        <div class="icon flaticon-muscle "></div>
                                        <div class="count-outer count-box  counted">
                                            <span class="count-text " data-speed="3500 " data-stop="10 ">10</span>
                                        </div>
                                        <div class="counter-title ">Iskusnih trenera</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12 ">
                                <div class="inner wow fadeInLeft  animated" data-wow-delay="300ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                                    <div class="content ">
                                        <div class="icon flaticon-fitness "></div>
                                        <div class="count-outer count-box alternate  counted">
                                            <span class="count-text " data-speed="2500 " data-stop="550 ">550</span>
                                        </div>
                                        <div class="counter-title ">Zadovoljnih klijenata</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12 ">
                                <div class="inner wow fadeInLeft  animated" data-wow-delay="600ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                                    <div class="content ">
                                        <div class="icon flaticon-building "></div>
                                        <div class="count-outer count-box  counted">
                                            <span class="count-text " data-speed="800 " data-stop="1 ">1</span>
                                        </div>
                                        <div class="counter-title ">Teretana</div>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-3 col-md-6 col-sm-12 ">
                                <div class="inner wow fadeInLeft  animated" data-wow-delay="600ms " data-wow-duration="1500ms " style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInLeft;">
                                    <div class="content ">
                                        <div class="icon flaticon-fitness-1 "></div>
                                        <div class="count-outer count-box  counted">
                                            <span class="count-text " data-speed="2000 " data-stop="1000 ">1000</span>
                                        </div>
                                        <div class="counter-title ">Iskustava</div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Timetable -->
        
        
        <div class="container " style="margin-top: 50px; margin-bottom: 50px; text-align: center;">
            <div class="inner-container ">
                 <a href="./raspored_septembar.jpg" data-lightbox="photos"><img class="img-fluid" src="raspored_septembar.jpg"></a>
            </div>

        </div>
    </div>

    <!-- Testimonial Section -->
    <section class="testimonial-section ">
        <div class="auto-container ">
            <div class="inner-container " style="background-image:url(&quot;Poznati-o-nama.jpg&quot;) ">
                <div class="row clearfix ">

                    <!-- Title Column -->
                    <div class="title-column col-lg-4 col-md-12 col-sm-12 ">
                        <div class="inner-column ">
                            <!-- Sec Title -->
                            <div class="sec-title light ">
                                <div class="title ">POZNATI O NAMA</div>
                                <h2>ŠTA O NAMA <br> KAŽU NAŠI KLIJENTI</h2>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Column -->
                    <div class="testimonial-column col-lg-8 col-md-12 col-sm-12 ">
                        <div class="inner-column ">
                            <div class="single-item-carousel owl-carousel owl-theme  owl-rtl owl-loaded owl-drag">

                                <!-- Testimonial Block Two -->
                                

                                <!-- Testimonial Block Two -->
                                

                                <!-- Testimonial Block Two -->
                                

                                

                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(3315px, 0px, 0px); transition: all 0.5s ease 0s; width: 5304px;"><div class="owl-item cloned" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="larisa.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Džudistkinja</div>
                                            <h4>Larisa Cerić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Zašto treniram u Body Artu? Zato što je to najbolji fitness u gradu, ima mnogo sprava i prostora za trening, veoma ljubazno osoblje, higijena uvijek na nivou, savršena lokacija, uvijek slobodno mjesto za parking
                                            što je veoma teško naći u ovom gradu. JEDNOSTAVNO NAJBOLJI
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="neno%20muric.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Muzičar</div>
                                            <h4>Neno Murić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Često sam počinjao trenirati, ali sam brzo odustajao. Shvatio sam da mi je u fitness centrima nedostasjao komfor i prijatan ambijent koji motivira. Body Art je moja preporuka jer pored komfora, opremljenosti i prijatnog
                                            ambijenta posjeduje ljubazno osoblje koje je uvijek spremno izaći u susret</div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="amra.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Manekenka</div>
                                            <h4>Amra Silajdžić Džeko</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Zaista je pravo uživanje doći u prostore Body Arta, gdje vas na vratima dočekaju ljubazni, stručni i topli ljudi. Profesionalnost je na najvišem nivou, izbor programa i više nego zadovoljavajući, pa nikada nisam poželjela trenirati na nekom drugom mjestu</div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="mirza.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Teniser</div>
                                            <h4>Mirza Bašić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Fitness centar u kojem treniram već 10 godina i to dovoljno govori o svemu. Najbolja oprema, koncept, prostrani prostor, savršeno osvijetljen, a osoblje baš kao i klijentela za čistu desetku
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="larisa.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Džudistkinja</div>
                                            <h4>Larisa Cerić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Zašto treniram u Body Artu? Zato što je to najbolji fitness u gradu, ima mnogo sprava i prostora za trening, veoma ljubazno osoblje, higijena uvijek na nivou, savršena lokacija, uvijek slobodno mjesto za parking
                                            što je veoma teško naći u ovom gradu. JEDNOSTAVNO NAJBOLJI
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="neno%20muric.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Muzičar</div>
                                            <h4>Neno Murić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Često sam počinjao trenirati, ali sam brzo odustajao. Shvatio sam da mi je u fitness centrima nedostasjao komfor i prijatan ambijent koji motivira. Body Art je moja preporuka jer pored komfora, opremljenosti i prijatnog
                                            ambijenta posjeduje ljubazno osoblje koje je uvijek spremno izaći u susret</div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="amra.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Manekenka</div>
                                            <h4>Amra Silajdžić Džeko</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Zaista je pravo uživanje doći u prostore Body Arta, gdje vas na vratima dočekaju ljubazni, stručni i topli ljudi. Profesionalnost je na najvišem nivou, izbor programa i više nego zadovoljavajući, pa nikada nisam poželjela trenirati na nekom drugom mjestu</div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 663px;"><div class="testimonial-block-two ">
                                    <div class="inner-box ">
                                        <div class="upper-box ">
                                            <div class="author-image ">
                                                <img src="mirza.jpg" alt=" ">
                                            </div>
                                            <div class="title ">Teniser</div>
                                            <h4>Mirza Bašić</h4>
                                            <div class="rating ">
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                                <span class="fa fa-star "></span>
                                            </div>
                                        </div>
                                        <div class="quote-icon flaticon-right-quote "></div>
                                        <div class="text ">Fitness centar u kojem treniram već 10 godina i to dovoljno govori o svemu. Najbolja oprema, koncept, prostrani prostor, savršeno osvijetljen, a osoblje baš kao i klijentela za čistu desetku
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav"><div class="owl-prev"><span class="fa fa-angle-left"></span></div><div class="owl-next"><span class="fa fa-angle-right"></span></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Pricing Section -->
    <section class="pricing-section ">
        <div class="image-layer " style="background-image:url(&quot;Clanarine.jpg&quot;) "></div>
        <div class="auto-container ">
            <!-- Sec Title -->
            <div class="sec-title light centered ">
                <div class="title ">Cjenovnik</div>
                <h2>Članarine <br></h2>
            </div>
            <div class="row clearfix ">
                <!-- Pricing Block -->
                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box " style="background-image:url(&quot;Clanarine-1.jpg&quot;) ">
                        <h4 style="text-align: center; ">Mjesečna članarina</h4>
                        <div class="price " style="text-align: center; "><span>50 KM</span></div>
                        <ul class="price-list ">
                            <li>Korištenje svih sadržaja u terminu 08:00 - 15:00</li>
                            <li>Besplatan parking</li>
                        </ul>
                        <div class="btn-one-outer "><a href="./cjenovnik.html" target="_blank " class="theme-btn btn-style-one " type="submit "><span class="txt ">Pogledaj
										Više</span></a></div>
                    </div>
                </div>

                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box " style="background-image:url(&quot;Clanarine-2.jpg&quot;) ">
                        <h4 style="text-align: center; ">Za studente</h4>
                        <div class="price " style="text-align: center; "><span>40 KM</span></div>
                        <ul class="price-list ">
                            <li>Korištenje svih sadržaja u terminu 08:00 - 15:00</li>
                            <li>Besplatan parking</li>
                        </ul>
                        <div class="btn-one-outer "><a href="./cjenovnik.html" target="_blank " class="theme-btn btn-style-one " type="submit "><span class="txt ">Pogledaj
										Više</span></a></div>
                    </div>
                </div>

                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box " style="background-image:url(&quot;Clanarine-3.jpg&quot;) ">
                        <h4 style="text-align: center; ">Dnevna karta</h4>
                        <div class="price " style="text-align: center; "><span>10 KM</span></div>
                        <ul class="price-list ">
                            <li>Korištenje svih sadržaja u terminu 08:00 - 22:00</li>
                            <li>Besplatan parking</li>
                        </ul>
                        <div class="btn-one-outer "><a href="./cjenovnik.html" target="_blank " class="theme-btn btn-style-one " type="submit "><span class="txt ">Pogledaj
										Više</span></a></div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End Pricing Section -->

    <!-- Main Footer -->
    <footer class="main-footer " style="background-image:url(&quot;Footer-dark.jpg&quot;) ">
        <div class="auto-container ">
            <!-- Widgets Section -->
            <div class="widgets-section ">
                <div class="row clearfix ">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12 ">

                        <div class="row clearfix ">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 ">
                                <div class="footer-widget timing-widget ">
                                    <h4>Adresa</h4>
                                    <ul>
                                        <li><span>Kolodvorska 12, Sarajevo</span></li>
                                        <li></li>
                                        <li style="color: #fff; "> <span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 ">
                                <div class="footer-widget timing-widget ">
                                    <h4>Telefon</h4>
                                    <ul>
                                        <li><span>+387 61 182 170</span></li>
                                        <li> <span></span></li>
                                        <li style="color: #fff; "><span></span></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12 ">
                        <div class="row clearfix ">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 ">
                                <div class="footer-widget timing-widget ">
                                    <h4>Email</h4>
                                    <ul>
                                        <li><span>info@bodyart.ba</span></li>
                                        <li> <span></span></li>
                                        <li style="color: #fff; "> <span></span></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 ">
                                <div class="footer-widget timing-widget ">
                                    <h4>Radno vrijeme</h4>
                                    <ul>
                                        <li>Pon-Pet: 06:30 - 22:00</li>
                                        <li>Sub: 09:00 - 21:00
                                        </li>
                                        <li>Ned: 10:00 - 20:00
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom ">
                <div class="copyright ">Copyright 2020 Made by <a href="https://leadsfactory.ba/" target="_blank " style="color: white !important"> Leads Factory</a> </div>
            </div>

        </div>
    </footer>



    <!-- Color Palate / Color Switcher -->
    <div class="color-palate ">
        <div class="color-trigger ">
            <i class="fa fa-gear "></i>
        </div>
        <div class="color-palate-head ">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix ">
            <div class="colors-list ">
                <span class="palate default-color active " data-theme-file="css/color-themes/default-theme.css "></span>
                <span class="palate green-color " data-theme-file="css/color-themes/green-theme.css "></span>
                <span class="palate olive-color " data-theme-file="css/color-themes/olive-theme.css "></span>
                <span class="palate orange-color " data-theme-file="css/color-themes/orange-theme.css "></span>
                <span class="palate purple-color " data-theme-file="css/color-themes/purple-theme.css "></span>
                <span class="palate teal-color " data-theme-file="css/color-themes/teal-theme.css "></span>
                <span class="palate brown-color " data-theme-file="css/color-themes/brown-theme.css "></span>
                <span class="palate redd-color " data-theme-file="css/color-themes/redd-color.css "></span>
            </div>
        </div>

        <h5>Other Options</h5>
        <ul class="rtl-version option-box ">
            <li class="rtl ">RTL Version</li>
            <li>LTR Version</li>
        </ul>

        <a href="#" class="purchase-btn ">Purchase now $17</a>

        <div class="palate-foo ">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used
					only for demonstation purposes.</span>
        </div>

    </div>

    <!-- Search Popup -->
    <div class="search-popup ">
        <button class="close-search style-two "><span class="flaticon-multiply "></span></button>
        <button class="close-search "><span class="flaticon-up-arrow-1 "></span></button>
        <form method="post " action="">
            <div class="form-group ">
                <input type="search " name="search-field " value=" " placeholder="Search Here " required=" ">
                <button type="submit "><i class="fa fa-search "></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target " data-target="html " style="display: block;"><span class="fa fa-arrow-up "></span></div>

    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   






</body></html>