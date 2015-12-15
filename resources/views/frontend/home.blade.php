@extends('frontend.default')

@section('content')

<!-- Home Section -->
<section class="home-section bg-dark-alfa-30 parallax-2" data-background="images/banner.jpg" id="home">
    <div class="js-height-full">
        
        <!-- Hero Content -->
        <div class="home-content">
            <div class="home-text">
                
                <h1 class="hs-line-1 font-alt mb-80 mb-xs-30 mt-50 mt-sm-0">
                    VORTUNES
                </h1>
                
                <div class="hs-line-6">
                    Make Your Dream Come True
                </div>
                
            </div>
        </div>
        <!-- End Hero Content -->
        
        <!-- Scroll Down -->
        <div class="local-scroll">
            <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
        </div>
        <!-- End Scroll Down -->
        
    </div>
</section>
<!-- End Home Section -->

@include('frontend.layouts.navigation')
            
            
<!-- About Section -->
<section class="page-section" id="about">
    <div class="container relative">
        
        <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
            About Vortunes
            
            <a href="#" class="section-more right">More about us <i class="fa fa-angle-right"></i></a>
            
        </h2>
        
        <div class="section-text">
            <div class="row">
                
                <div class="col-md-4 mb-sm-50 mb-xs-30">
                     
                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            Branding, % <span>90</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->
                    
                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                            Design, % <span>80</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->
                    
                    <!-- Bar Item -->
                    <div class="progress tpl-progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            Development, % <span>85</span>
                        </div>
                    </div>
                    <!-- End Bar Item -->
                     
                </div>
                
                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. 
                </div>
                
                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
                </div>
                
            </div>
        </div>
        
    </div>
</section>
<!-- End About Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Portfolio Section -->
<section class="page-section">
    <div class="container relative">
        
        <!-- Works Filter -->                    
        <div class="works-filter font-alt align-center">
            <a href="#" class="filter active" data-filter="*">All works</a>
            <a href="#branding" class="filter" data-filter=".branding">Branding</a>
            <a href="#design" class="filter" data-filter=".design">Design</a>
            <a href="#photography" class="filter" data-filter=".photography">Photography</a>
        </div>                    
        <!-- End Works Filter -->
        
        <!-- Works Grid -->
        <ul class="works-grid work-grid-3 work-grid-gut clearfix font-alt hover-white" id="work-grid">
            
            <!-- Work Item (Lightbox) -->
            <li class="work-item mix photography">
                <a href="images/portfolio/full-project-1.jpg" class="work-lightbox-link mfp-image">
                    <div class="work-img">
                        <img src="images/portfolio/projects-1.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Portrait</h3>
                        <div class="work-descr">
                            Lightbox
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding design">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-2.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Vase 3D</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-3.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Boy in T-shirt</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix design photography">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-4.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Space</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix design">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-5.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Model</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding design">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-6.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Vase 3D</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-7.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Boy in T-shirt</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix design photography">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-8.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Space</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding design">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-9.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Vase 3D</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix branding">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-10.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Boy in T-shirt</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (External Page) -->
            <li class="work-item mix design photography">
                <a href="portfolio-single-1.html" class="work-ext-link">
                    <div class="work-img">
                        <img class="work-img" src="images/portfolio/projects-11.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Space</h3>
                        <div class="work-descr">
                            External Page
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
            <!-- Work Item (Lightbox) -->
            <li class="work-item mix design branding">
                <a href="images/portfolio/full-project-3.jpg" class="work-lightbox-link mfp-image">
                    <div class="work-img">
                        <img src="images/portfolio/projects-12.jpg" alt="Work" />
                    </div>
                    <div class="work-intro">
                        <h3 class="work-title">Young Man</h3>
                        <div class="work-descr">
                            Lightbox
                        </div>
                    </div>
                </a>
            </li>
            <!-- End Work Item -->
            
        </ul>
        <!-- End Works Grid -->
        
    </div>
</section>
<!-- End Portfolio Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Services Section -->
<section class="page-section" id="services">
    <div class="container relative">
        
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Proses Peminjaman
        </h2>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">
            <li class="active">
                <a href="#service-branding" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-strategy"></span>
                    </div>
                    
                    User
                </a>
            </li>
            <li>
                <a href="#service-web-design" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-desktop"></span>
                    </div>
                    
                    Form Online
                </a>
            </li>
            <li>
                <a href="#service-graphic" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-tools"></span>
                    </div>
                    
                    Process Approval
                </a>
            </li>
            <li>
                <a href="#service-development" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-gears"></span>
                    </div>
                    
                    Result
                </a>
            </li>
            <li>
                <a href="#service-photography" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-camera"></span>
                    </div>
                    
                    Response
                </a>
            </li>
			<li>
                <a href="#service-finish" data-toggle="tab">
                    
                    <div class="alt-tabs-icon">
                        <span class="icon-flag"></span>
                    </div>
                    
                    Finish
                </a>
            </li>
        </ul>
        <!-- End Nav tabs -->
        
        <!-- Tab panes -->
        <div class="tab-content tpl-tabs-cont">
            
            <!-- Service Item -->
            <div class="tab-pane fade in active" id="service-branding">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>
                                    A&nbsp;brand for a&nbsp;company is&nbsp;like a&nbsp;reputation 
                                    for a&nbsp;person. You earn reputation by&nbsp;trying to&nbsp;do&nbsp;hard 
                                    things well.
                                </p>
                                <footer>
                                    Jeff Bezos
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum 
                            volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. 
                            In maximus ligula metus pellentesque mattis.  
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. 
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. 
                            Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. 
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
            
            <!-- Service Item -->
            <div class="tab-pane fade" id="service-web-design">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>
                                    It&nbsp;doesn&rsquo;t matter how many times&nbsp;I have to&nbsp;click, as&nbsp;long 
                                    as&nbsp;each click is&nbsp;a&nbsp;mindless, unambiguous choice.
                                </p>
                                <footer>
                                    Steve Krug
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Cras mi tortor, laoreet id ornare et, accumsan non magna. Maecenas vulputate accumsan velit. 
                            Curabitur a nulla ex. Nam a tincidunt ante. Vitae gravida turpis. Vestibulum varius
                            nulla non nulla scelerisque tristique.
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Mauris id viverra augue, eu porttitor diam. Praesent faucibus est a interdum elementum. 
                            Nam varius at ipsum id dignissim. Nam a tincidunt ante lorem. Pellentesque suscipit ante
                            at ullamcorper pulvinar neque porttitor. 
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
            
            <!-- Service Item -->
            <div class="tab-pane fade" id="service-graphic">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>
                                    Never fall in&nbsp;love with an&nbsp;idea. They&rsquo;re whores. If&nbsp;the one you&rsquo;re with isn&rsquo;t doing the job, there&rsquo;s always another.
                                </p>
                                <footer>
                                    Chip Kidd
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. In maximus ligula metus pellentesque
                            mattis. Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Praesent sed nisi eleifend, 
                            fermentum orci amet, iaculis libero. 
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                             
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Etiam sit amet 
                            fringilla lacus. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id&nbsp;dolor 
                            consectetur fermentum volutpat nibh, accumsan purus. 
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
            
            <!-- Service Item -->
            <div class="tab-pane fade" id="service-development">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>
                                    All that is&nbsp;valuable in&nbsp;human society depends upon the opportunity for development accorded the individual.
                                </p>
                                <footer>
                                    Albert Einstein
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Fusce hendrerit vitae nunc id gravida. Donec euismod quis ante at mattis. Mauris dictum ante sit 
                            amet enim interdum semper. Vestibulum odio justo, faucibus et dictum eu, malesuada nec neque.
                            Maecenas  volutpat, diam enim sagittis. 
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Sed id dolor consectetur fermentum 
                            volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. 
                            Inmed maximus ligula metus pellentesque.
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
            
            <!-- Service Item -->
            <div class="tab-pane fade" id="service-photography">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>
                                    Photography is&nbsp;the simplest thing in&nbsp;the world, but it&nbsp;is&nbsp;incredibly 
                                    complicated to&nbsp;make it&nbsp;really work.
                                </p>
                                <footer>
                                    Martin Parr
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. 
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. 
                            Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. 
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum 
                            volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. 
                            In maximus ligula metus pellentesque mattis. 
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
            
			
			<!-- Service Item -->
            <div class="tab-pane fade" id="service-finish">
                
                <div class="section-text">
                    <div class="row">
                        <div class="col-md-4 mb-md-40 mb-xs-30">
                            <blockquote class="mb-0">
                                <p>	
									FINISH!
                                </p>
                                <footer>
                                    Martin Parr
                                </footer>
                            </blockquote>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Donec vel ultricies purus. Nam dictum sem, ipsum aliquam . Etiam sit amet fringilla lacus. 
                            Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. 
                            Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. 
                        </div>
                        <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                            Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum 
                            volutpat nibh, accumsan purus. Lorem ipsum dolor sit semper amet, consectetur adipiscing elit. 
                            In maximus ligula metus pellentesque mattis. 
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End Service Item -->
        </div>
        <!-- End Tab panes -->
        
        <!-- <div class="align-center">
            <a href="pages-services-1.html" class="section-more font-alt">View all services <i class="fa fa-angle-right"></i></a>
        </div> -->
        
    </div>
</section>
<!-- End Services Section -->

<!-- Testimonials Section -->
<section class="page-section bg-dark bg-dark-alfa-90 fullwidth-slider" data-background="images/full-width-images/section-bg-3.jpg">
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">Apa pendapat orang tentang kami?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">Apa pendapat orang tentang kami?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
    <!-- Slide Item -->
    <div>
        <div class="container relative">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 align-center">
                    <!-- Section Icon -->
                    <div class="section-icon">
                        <span class="icon-quote"></span>
                    </div>
                    <!-- Section Title --><h3 class="small-title font-alt">Apa pendapat orang tentang kami?</h3>
                    <blockquote class="testimonial white">
                        <p>
                            Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                            risus utaliquam dapibus. Thanks!
                        </p>
                        <footer class="testimonial-author">
                            John Doe, doodle inc.
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide Item -->
    
</section>
<!-- End Testimonials Section -->

<!-- Features Section -->
<section class="page-section">
    <div class="container relative">
        
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Kenapa Harus Memilih Kami?
        </h2>
        
        <!-- Features Grid -->
        <div class="row multi-columns-row alt-features-grid">
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-flag"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We’re Creative</h3>
                    <div class="alt-features-descr align-left">
                        Lorem ipsum dolor sit amet, c-r adipiscing elit. 
                        In maximus ligula semper metus pellentesque mattis. 
                        Maecenas  volutpat, diam enim.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-clock"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We’re Punctual</h3>
                    <div class="alt-features-descr align-left">
                        Proin fringilla augue at maximus vestibulum. 
                        Nam pulvinar vitae neque et porttitor. Praesent sed 
                        nisi eleifend, lorem fermentum orci sit amet, iaculis libero.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-hotairballoon"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We have magic</h3>
                    <div class="alt-features-descr align-left">
                        Curabitur iaculis accumsan augue, nec finibus mauris pretium eu. 
                        Duis placerat ex gravida nibh tristique porta. Nulla facilisi. 
                        Suspendisse ultricies eros blandit.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-heart"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We love minimalism</h3>
                    <div class="alt-features-descr align-left">
                        Cras luctus interdum sodales. Quisque quis odio dui. Sedes sit 
                        amet neque malesuada, lobortis  commodo magna ntesque pharetra 
                        metus vivera sagittis.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-linegraph"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We’re responsible</h3>
                    <div class="alt-features-descr align-left">
                        Fusce aliquet quam eget neque ultrices elementum. Nulla posuere 
                        felis id arcu blandit sagittis. Eleifender vestibulum purus, sit 
                        amet vulputate risus.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
            <!-- Features Item -->
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-chat"></span>
                    </div>
                    <h3 class="alt-features-title font-alt">We're Friendly</h3>
                    <div class="alt-features-descr align-left">
                        Pulvinar vitae neque et porttitor. Integer non dapibus diam, ac 
                        eleifend lectus. Praesent sed nisi eleifend, fermentum orci sit 
                        amet, iaculis libero interdum.
                    </div>
                </div>
            </div>
            <!-- End Features Item -->
            
        </div>
        <!-- End Features Grid -->
    
    </div>
</section>
<!-- End Features Section -->

<!-- Call Action Section -->
<!--<section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="images/full-width-images/section-bg-2.jpg">
    <div class="container relative">
        
        <div class="row">
            
            <div class="col-sm-6">
                
                <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                    <div class="banner-content">
                        <h3 class="banner-heading font-alt">Looking for exclusive digital services?</h3>
                        <div class="banner-decription">
                            Proin fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. 
                            Integer non dapibus diam, ac eleifend lectus.
                        </div>
                        <div class="local-scroll">
                            <a href="pages-contact-1.html" class="btn btn-mod btn-w btn-medium btn-round">Lets talk</a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="col-sm-6 banner-image wow fadeInUp">
                <img src="images/promo-1.png" alt="" />
            </div>
            
        </div>
        
    </div>
</section>-->
<!-- End Call Action Section -->

<!-- Call Action Section -->
<section class="small-section bg-dark">
    <div class="container relative">
        
        <div class="align-center">
            <h3 class="banner-heading font-alt">Ingin bergabung dengan kami?</h3>
            <div class="local-scroll">
                <a href="portfolio-wide-gutter-3col.html" class="btn btn-mod btn-w btn-medium btn-round">
                	Login / Daftar Sekarang
                </a>
            </div>
        </div>
        
    </div>
</section>
<!-- End Call Action Section -->

@stop