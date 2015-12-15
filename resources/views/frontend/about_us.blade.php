@extends('frontend.default')

@section('content')

@include('frontend.layouts.navigation')

<section class="page-section bg-dark-alfa-50 parallax-3" data-background="images/full-width-images/section-bg-10.jpg" style="background-image: url(&quot;images/full-width-images/section-bg-10.jpg&quot;); background-position: 50% 2px;">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Tentang Kami</h1>
                <div class="hs-line-4 font-alt">
                    Tim yang luar biasa yang akan membantu memenuhi kebutuhan Anda.
                </div>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="{{ route('frontend.home') }}">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Tentang Kami</span>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<section class="page-section" id="about">
    <div class="container relative">
        
        <div class="section-text mb-50 mb-sm-20">
            <div class="row">
            
                <div class="col-md-4">
                    <blockquote>
                        <p>
                        Design is&nbsp;not making beauty, beauty emerges from selection, affinities, integration, love.
                        </p>
                        <footer>
                            Louis Kahn
                        </footer>
                    </blockquote>
                </div>
                
                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas  volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus. 
                </div>
                
                <div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
                    Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
                </div>
                
            </div>
        </div>
        
        
        <div class="row">
            
            <!-- Team item -->
            <div class="col-sm-4 mb-xs-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="team-item">
                    
                    <div class="team-item-image">
                        
                        <img src="images/team/team-1.jpg" alt="">
                        
                        <div class="team-item-detail">
                            
                            <h4 class="font-alt normal">Hello &amp; Welcome!</h4>
                            
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&nbsp;iaculis diam. 
                            </p>
                            
                            <div class="team-social-links">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="team-item-descr font-alt">
                        
                        <div class="team-item-name">
                            Thomas Rhythm 
                        </div>
                        
                        <div class="team-item-role">
                            Art Director
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- End Team item -->
            
            <!-- Team item -->
            <div class="col-sm-4 mb-xs-30 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="team-item">
                    
                    <div class="team-item-image">
                        
                        <img src="images/team/team-2.jpg" alt="">
                        
                        <div class="team-item-detail">
                            
                            <h4 class="font-alt normal">Nice to meet!</h4>
                            
                            <p>
                                Curabitur augue, nec finibus mauris pretium eu. Duis placerat ex gravida nibh tristique porta.
                            </p>
                            
                            <div class="team-social-links">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="team-item-descr font-alt">
                        
                        <div class="team-item-name">
                            Marta Laning
                        </div>
                        
                        <div class="team-item-role">
                            Web engineer
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- End Team item -->
            
            <!-- Team item -->
            <div class="col-sm-4 mb-xs-30 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="team-item">
                    
                    <div class="team-item-image">
                        
                        <img src="images/team/team-3.jpg" alt="">
                        
                        <div class="team-item-detail">
                            
                            <h4 class="font-alt normal">Whats Up!</h4>
                            
                            <p>
                                Adipiscing elit curabitur eu&nbsp;adipiscing lacus eu&nbsp;adipiscing lacus, a&nbsp;iaculis diam. 
                            </p>
                            
                            <div class="team-social-links">
                                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="team-item-descr font-alt">
                        
                        <div class="team-item-name">
                            Steve ANDERS
                        </div>
                        
                        <div class="team-item-role">
                            Developer
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <!-- End Team item -->
            
        </div>
        
    </div>
</section>

@stop