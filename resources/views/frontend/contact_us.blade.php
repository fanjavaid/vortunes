@extends('frontend.default')

@section('content')

@include('frontend.layouts.navigation')

<section class="page-section bg-dark-alfa-70 parallax-3" data-background="images/full-width-images/section-bg-25.jpg" style="background-image: url(&quot;images/full-width-images/section-bg-25.jpg&quot;); background-position: 50% -3px;">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Kontak Kami</h1>
                <div class="hs-line-4 font-alt">
                    Kami selalu terbuka untuk berbicara dengan Anda.
                </div>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="{{ route('frontend.home') }}">Home</a>&nbsp;/&nbsp;<a href="#">Pages</a>&nbsp;/&nbsp;<span>Hubungi Kami</span>
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<section class="page-section" id="contact">
    <div class="container relative">
        
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Anda mempunyai pertanyaan?
        </h2>
        
        <div class="row mb-60 mb-xs-40">
            
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    
                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Telepon
                            </div>
                            <div class="ci-text">
                                +61 3 8376 6284
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->
                    
                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Alamat
                            </div>
                            <div class="ci-text">
                                245 Quigley Blvd, Ste K
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->
                    
                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Email
                            </div>
                            <div class="ci-text">
                                <a href="mailto:info@vortunes.com">info@vortunes.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->
                    
                </div>
            </div>
            
        </div>
        
        <!-- Contact Form -->                            
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">
                        
                        <div class="cf-left-col">
                            
                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="Nama" pattern=".{3,100}" required="">
                            </div>
                            
                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="Alamat Email" pattern=".{5,100}" required="">
                            </div>
                            
                        </div>
                        
                        <div class="cf-right-col">
                            
                            <!-- Message -->
                            <div class="form-group">                                            
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 84px;" placeholder="Pesan"></textarea>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="clearfix">
                        
                        <div class="cf-left-col">
                            
                            <!-- Inform Tip -->                                        
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> Semua field harus diisi
                            </div>
                            
                        </div>
                        
                        <div class="cf-right-col">
                            
                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">Kirim Pesan</button>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    
                    
                    <div id="result"></div>
                </form>
                
            </div>
        </div>
        <!-- End Contact Form -->
        
    </div>
</section>

<div class="google-map">
    <div data-address="Belt Parkway, Queens, NY, United States" id="map-canvas"></div>
    
    <div class="map-section">
        <div class="map-toggle">
            <div class="mt-icon">
                <i class="fa fa-map-marker"></i>
            </div>
            <div class="mt-text font-alt">
                <div class="mt-open">Open the map <i class="fa fa-angle-down"></i></div>
                <div class="mt-close">Close the map <i class="fa fa-angle-up"></i></div>
            </div>
        </div>
        
    </div>
    
</div>

@stop