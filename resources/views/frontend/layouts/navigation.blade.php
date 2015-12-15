<!-- Navigation panel -->
<nav class="main-nav dark transparent stick-fixed">
    <div class="full-wrapper relative clearfix">
        
        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="mp-index.html" class="logo">
                <img src="images/logo-white.png" alt="" />
            </a>
        </div>
        
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        
        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist">
                
                <!-- Item With Sub -->
                <li>
                    <a href="{{ route('frontend.home') }}" class="mn-has-sub">Home</a>
                </li>
                <!-- End Item With Sub -->

                <!-- Item With Sub -->
                <li>
                    <a href="{{ route('frontend.tentang-kami') }}" class="mn-has-sub">Tentang Kami</a>
                </li>
                <!-- End Item With Sub -->
                
                <!-- Item With Sub
                <li>
                    <a href="#" class="mn-has-sub">Pengajuan Kredit</a>
                </li>
                End Item -->
                
                <!-- Item With Sub
                <li>
                    <a href="#" class="mn-has-sub">Portfolio <i class="fa fa-angle-down"></i></a>
                    
                    <ul class="mn-sub">
                        
                        <li>
                            <a href="#" class="mn-has-sub">Boxed <i class="fa fa-angle-right right"></i></a>
                        
                            <ul class="mn-sub">
                                <li>
                                    <a href="portfolio-boxed-2col.html">2 Columns</a>
                                </li>
                                <li>
                                    <a href="portfolio-boxed-3col.html">3 Columns</a>
                                </li>
                                <li>
                                    <a href="portfolio-boxed-4col.html">4 Columns</a>
                                </li>
                                <li>
                                    <a href="portfolio-boxed-5col.html">5 Columns</a>
                                </li>
                                <li>
                                    <a href="portfolio-boxed-blackhover.html">Black Hovers</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="portfolio-parallax.html">Parallax</a>
                        </li>
                        
                        <li>
                            <a href="portfolio-promo.html">Promo</a>
                        </li>
                        
                    </ul>
                    
                </li>
                End Item With Sub -->
                
                <!-- Item With Sub
                <li>
                    <a href="#" class="mn-has-sub">Blog</a>
                </li>
                End Item With Sub -->
                
                <li>
                    <a href="{{ route('frontend.simulasi-kredit') }}" class="mn-has-sub">Simulasi Kredit</a>
                </li>

                <!-- Item With Sub -->
                <li>
                    <a href="{{ route('frontend.hubungi-kami') }}" class="mn-has-sub">Hubungi Kami</a>
                </li>
                <!-- End Item With Sub -->
                
                <!-- Divider -->
                <li><a>&nbsp;</a></li>
                <!-- End Divider -->
                
                <!-- Search -->
                <!-- <li>
                    <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Search</a>
                    
                    <ul class="mn-sub">
                        
                        <li>
                            <div class="mn-wrap">
                                <form method="post" class="form">
                                    <div class="search-wrap">
                                        <button class="search-button animate" type="submit" title="Start Search">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        <input type="text" class="form-control search-field" placeholder="Search...">
                                    </div>
                                </form>
                            </div>
                        </li>
                        
                    </ul>
                    
                </li> -->
                <!-- End Search -->
                
                <!-- Cart -->
                <li>
                    <a href="#"><i class="fa fa-lock"></i> Login/Register</a>
                </li>
                <!-- End Cart -->
                
                <!-- Languages -->
                <!--<li>
                    <a href="#" class="mn-has-sub">Eng <i class="fa fa-angle-down"></i></a>
                    
                    <ul class="mn-sub">
                        
                        <li><a href="#">English</a></li>
                        <li><a href="#">France</a></li>
                        <li><a href="#">Germany</a></li>
                        
                    </ul>
                    
                </li>-->
                <!-- End Languages -->
                
            </ul>
        </div>
        <!-- End Main Menu -->
        
    </div>
</nav>
<!-- End Navigation panel -->