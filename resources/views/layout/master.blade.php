<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - Zent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{asset('blog_asset/img/favicon.png')}}"/>
    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/slippry.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('blog_asset/css/style.css') }}">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
</head>

<body>


    <!-- *****************************************************************
    ** Preloader *********************************************************
    ****************************************************************** -->

    <div id="preloader-container">
        <div id="preloader-wrap">
            <div id="preloader"></div>
        </div>
    </div>

    
    <!-- *****************************************************************
    ** Header ************************************************************ 
    ****************************************************************** --> 

    <header class="tada-container">
    
    
        <!-- LOGO -->    
        <div class="logo-container">
            <a href="index.html"><img src="{{ asset('blog_asset/img/logo.png')}}" alt="logo" ></a>
            <div class="tada-social">
                <a href="#"><i class="icon-facebook5"></i></a>
                <a href="#"><i class="icon-twitter4"></i></a>
                <a href="#"><i class="icon-google-plus"></i></a>
                <a href="#"><i class="icon-vimeo4"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
        
        
        <!-- MENU DESKTOP -->
        <nav class="menu-desktop menu-sticky">
    
            <ul class="tada-menu">
                     @foreach($categories as $category)
                        <li><a href="#">{{$category->name}}</a>
                    </li>
                     @endforeach
            </ul>
        
        </nav>
        
        

        <!-- SEARCH -->
        <div class="tada-search">
            <form>
                <div class="form-group-search">
                    <input type="search" class="search-field" placeholder="Search and hit enter...">
                    <button type="submit" class="search-btn"><i class="icon-search4"></i></button>
                </div>
            </form>
        </div>
        
        
        <!-- SLIDER -->
        <div class="tada-slider">
            <ul id="tada-slider">
                <li>
                    <img src="{{ asset('blog_asset/img/image-slider-1.jpg')}}" alt="image slider 1">
                    <div class="pattern"></div>
                    <div class="tada-text-container">
                        <h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('blog_asset/img/image-slider-2.jpg')}}" alt="image slider 2">
                    <div class="pattern"></div>
                    <div class="tada-text-container">
                        <h1>MAECENAS CONSECTETUR</h1>
                        <h2>Lorem <span class="main-color">ipsum dolor</span> sit amet</h2>
                        <span class="button"><a href="#">READ ME</a></span>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('blog_asset/img/image-slider-3.jpg') }}" alt="image slider 3">
                    <div class="pattern"></div>
                    <div class="tada-text-container">
                        <h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>                
                </li>
                <li>
                    <img src="{{ asset('blog_asset/img/image-slider-4.jpg') }}" alt="image slider 4">
                    <div class="pattern"></div>
                    <div class="tada-text-container">
                        <h1>AENEAN AC DIAM</h1>
                        <h2>VIVAMUS <span class="main-color">TINCIDUNT</span> FERMENTUM</h2>
                        <span class="button"><a href="#">TEXT BUTTON</a></span>
                    </div>                
                </li>
            </ul>
            
        </div><!-- #SLIDER -->
                
                
    </header><!-- #HEADER -->

    
    <!-- *****************************************************************
    ** Section ***********************************************************
    ****************************************************************** -->
    
    
    
    
        @yield('content')

        
        
        
        <!-- SIDEBAR -->
        <div class="sidebar col-xs-4">
            
            
            <!-- ABOUT ME -->                    
            <div class="widget about-me">
                <div class="ab-image">
                    <img src="{{ asset('blog_asset/img/about-me.jpg')}}" alt="about me">
                    <div class="ab-title">About Me</div>
                </div>
                <div class="ad-text">
                    <p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    <span class="signing"><img src="{{asset('blog_asset/img/signing.png')}}" alt="signing"></span>
                </div>
            </div>


            <!-- LATEST POSTS -->                             
            <div class="widget latest-posts">
                <h3 class="widget-title">
                    Latest Posts
                </h3>
                <div class="posts-container">
                
                    <div class="item">
                        <img src="{{ asset('blog_asset/img/latest-posts-1.jpg')}}" alt="post 1" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAECENAS <br> CONSECTETUR</a></h5>
                            <span class="date">07 JUNE 2016</span>  
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('blog_asset/img/latest-posts-2.jpg')}}" alt="post 2" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">MAURIS SIT AMET</a></h5>
                            <span class="date">06 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('blog_asset/img/latest-posts-3.jpg')}}" alt="post 3" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">NAM EGET <br> PULVINAR ANTE</a></h5>
                            <span class="date">05 JUNE 2016</span>                          
                        </div> 
                        <div class="clearfix"></div>   
                    </div>

                    <div class="item">
                        <img src="{{ asset('blog_asset/img/latest-posts-4.jpg')}}" alt="post 4" class="post-image">
                        <div class="info-post">
                            <h5><a href="#">VIVAMUS ET TURPIS LACINIA</a></h5>
                            <span class="date">04 JUNE 2016</span>                      
                        </div>    
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>


            <!-- FOLLOW US -->                             
            <div class="widget follow-us">
                <h3 class="widget-title">
                    Follow Us
                </h3>
                <div class="follow-container">
                    <a href="#"><i class="icon-facebook5"></i></a>
                    <a href="#"><i class="icon-twitter4"></i></a>
                    <a href="#"><i class="icon-google-plus"></i></a>
                    <a href="#"><i class="icon-vimeo4"></i></a>
                    <a href="#"><i class="icon-linkedin2"></i></a>                
                </div>
                <div class="clearfix"></div>
            </div>            


            <!-- TAGS -->                            
            <div class="widget tags">
                <h3 class="widget-title">
                    Tags
                </h3>
                <div class="tags-container">
                    <a href="#">Audio</a>
                    <a href="#">Travel</a>
                    <a href="#">Food</a>
                    <a href="#">Event</a>
                    <a href="#">Wordpress</a>
                    <a href="#">Video</a>
                    <a href="#">Design</a>
                    <a href="#">Sport</a>
                    <a href="#">Blog</a>
                    <a href="#">Post</a> 
                    <a href="#">Img</a>
                    <a href="#">Masonry</a>                                    
                </div>
                <div class="clearfix"></div>
            </div> 


            <!-- ADVERTISING -->                           
            <div class="widget advertising">
                <div class="advertising-container">
                    <img src="{{asset('blog_asset/img/350x300.png')}}" alt="banner 350x300">
                </div>
            </div>


            <!-- NEWSLETTER -->                          
            <div class="widget newsletter">
                <h3 class="widget-title">
                    Newsletter
                </h3>
                <div class="newsletter-container">
                    <h4>DO NOT MISS OUR NEWS</h4>
                    <p>Sign up and receive the <br> latest news of our company</p> 
                    <form>
                       <input type="email" class="newsletter-email" placeholder="Your email address...">
                       <button type="submit" class="newsletter-btn">Send</button>
                    </form>                                  
                </div>
                <div class="clearfix"></div>
            </div>  
            
        </div> <!-- #SIDEBAR -->
        
        <div class="clearfix"></div>
        
    </section>

    
    <!-- *****************************************************************
    ** Footer ************************************************************
    ****************************************************************** -->    
    
    <footer class="tada-container">
    
    
        <!-- INSTAGRAM -->    
        <div class="widget widget-gallery">
            <h3 class="widget-title">INSTAGRAM</h3>
            <div class="image">
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-1.jpg')}}" alt="image gallery 1"></a>
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-2.jpg')}}" alt="image gallery 2"></a>
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-3.jpg')}}" alt="image gallery 3"></a>
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-4.jpg')}}" alt="image gallery 4"></a>
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-5.jpg')}}" alt="image gallery 5"></a>
                <a href="#"><img src="{{ asset('blog_asset/img/img-gallery-6.jpg')}}" alt="image gallery 6"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        
        
        <!-- FOOTER BOTTOM -->        
        <div class="footer-bottom">
            <span class="copyright">Theme Created by <a href="#">AD-Theme</a> Copyright © 2016. All Rights Reserved</span>
            <span class="backtotop">TOP <i class="icon-arrow-up7"></i></span>
            <div class="clearfix"></div>
        </div>
        
        
    </footer>
    
    
    <!-- *****************************************************************
    ** Script ************************************************************
    ****************************************************************** -->  
    
    <script src="{{ asset('blog_asset/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('blog_asset/js/slippry.js') }}"></script>
    <script src="{{ asset('blog_asset/js/main.js') }}"></script>

</body>
</html>