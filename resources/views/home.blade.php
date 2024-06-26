<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href={{url('assets/css/app.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
<body>
    {{-- top section --}}
    <section class="top-section">
        <nav>
            <div class="logo">
                <img src="{{url('assets/image/logo.png')}}" alt="loading">
                <h4>EasyDress Attire</h4>
            </div>
            <div class="links">
                <ul class="link">
                    <li><a class="hlink" href="{{url('')}}">Home</a></li>
                    <li><a class="hlink" href="{{url('aboutus')}}">About</a></li>
                    <li><a class="hlink" href="{{url('top')}}">Top</a></li>
                    <li><a class="hlink" href="{{url('bottom')}}">Bottom</a></li>
                    <li><a class="hlink" href="{{url('shoes')}}">shoes</a></li>
                     <li><a class="hlink" href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li> 
                    {{-- <li><a href="{{url('delsession')}}">logout</a></li> --}}
                    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"> 
                         @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10" style="display: flex;flex-direction:row;gap:1.7rem;">
                                @auth
                                <div class="sec-center"> 	
                                    <input class="dropdown" type="checkbox" id="dropdown" name="dropdown"/>
                                    <label class="for-dropdown" id="name" for="dropdown">{{Auth::User()->name}}&nbsp;&nbsp;<i id="icon" class="fa-solid fa-angle-down"></i></label>
                                    <div class="section-dropdown"> 
                                        <a class="default" href="{{url('profile')}}">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </div>
                                </div>
                                @else
                                    <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>
            
                                    @if (Route::has('register'))
                                       <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        </div>
                        @endif
                </ul>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        <div class="front-content">
            <h1 class="front-trade">Trade in Offer</h1>
            <h1 class="front-super-value">Super value deals</h1>
            <h1 class="front-product">on all products</h1>
            <h1 class="front-coupin">Save more with coupins & up to 70% off!</h1>
            <button class="shop-now">Shop now</button>
        </div>
    </section>
    {{-- Best Seller --}}
    <div class="best-seller">
        <h1>Best Seller</h1>
        <div class="bestSeller-Collection">
            <div class="right"><i class="fa-solid fa-circle-chevron-right"></i></div>
            <div class="left"><i class="fa-solid fa-circle-chevron-left"></i></div>
            <img src="{{url('assets/image/feature-photos/Men Random Palm Tree Print Shirt.jpg')}}" alt="">
            <img src="{{url('assets/image/feature-photos/Summer shirt gift.jpg')}}" alt="">
            <img src="{{url('assets/image/feature-photos/Men Striped Button.jpg')}}" alt="">
            <img src="{{url('upload/1718373390Product.jpg')}}" alt="">
            <img src="{{url('upload/1718380709Product.jpg')}}" alt="">
            <img src="{{url('upload/1718380796Product.jpg')}}" alt="">
            <img src="{{url('upload/1718377536Product.jpg')}}" alt="">
            <img src="{{url('upload/public/upload/1718377310Product.jpg.jpg')}}" alt="">
            <img src="{{url('upload/1718376564Product.jpg')}}" alt="">
            <img src="{{url('upload/1718376125Product.jpg')}}" alt="">
        </div>
    </div>
    {{-- each types of dress --}}
    <div class="dressType">
        <div class="top" id="abcde">
            <a href="{{url('top')}}"><h1>Top</h1></a>
        </div>
        <div class="bottom">
           <a href="{{url('bottom')}}"><h1>bottom</h1></a>
        </div>
        <div class="shoes">
            <a href="{{url('shoes')}}"><h1>Shoes</h1></a>
        </div>
        <div class="fullSet">
            <a href="{{url('fullset')}}"><h1>fullSet</h1></a>
        </div>
    </div>
    {{-- features photo collection --}}
    <br>
    <br><br>
    <div class="featured-Product">
            <center><h1 class="feature-Heading">Featured Products</h1></center>
            <h1 class="feature-Text">Summer Collection New Modern Design</h1>
    </div>
    
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" style="position:absolute;top:20px;left:60px;" role="alert">
        <strong> 
            {{session('message')}}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="feature-Photo-Collection">
        @foreach ($features as $feature)
            @if($feature->productType === 'featureProduct')
        
        <div class="feature-photos">
            <div class="feature-Photo">
                <img src="{{url('/upload')}}/{{$feature->productImage}}" alt="">
            </div>
            <div class="feature-Company" style="font-size: 0.999rem;color: #b3b3b3;">{{$feature->productCompany}}</div>
            <div class="feature-Photo-Name" style="font-weight: 600;font-size: 1.09rem;font-family:sans-serif;">{{$feature->productName}}</div>
            <div class="feature-Pricing"  style="display:flex;flex-direction:row; justify-content:space-between;align-items:center">
                <div class='feature-Rat-Prc'>
                    <div class="rating">
                        <input value="5" name="rating" id="star5" type="radio">
                        <label for="star5"></label>
                        <input value="4" name="rating" id="star4" type="radio">
                        <label for="star4"></label>
                        <input value="3" name="rating" id="star3" type="radio">
                        <label for="star3"></label>
                        <input value="2" name="rating" id="star2" type="radio">
                        <label for="star2"></label>
                        <input value="1" name="rating" id="star1" type="radio">
                        <label for="star1"></label>
                      </div>
                <h5 class="feature-Price" style="color:#049804;">{{$feature->productPrice}}</h5>
                </div>
                <div class="feature-cart" style="background: #dde2dd;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid #dde2dd;
                border-radius: 50%;">
                    <a href="{{url('cart')}}/{{$feature->id}}"><i class="fa-solid fa-cart-shopping" id="fcart"></i></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    {{-- online shooping banner with 70% off --}}
    <div class="banner" style="color:white;">
        <div class="banner-text" style="font-size: 1.5rem; color:White;">Repair Services</div>
        <div class="banner-offer" style="text-align: center;">Up to <span style="color:red;">70% Off</span> - All t-Shirts & Accessories</div>
        <div class="banner-button">
            <button>Explore More</button>
        </div>
    </div>
    {{-- New arrival trending dress --}}
    <div class="featured-Product">
        <center><h1 class="feature-Heading">New Arrivals</h1></center>
        <h1 class="feature-Text">Summer Collection New Modern Design</h1>
</div>
    <div class="feature-Photo-Collection">
        @foreach ($features as $feature)
        @if($feature->productType === 'newArrival')
        <div class="feature-photos">
            <div class="feature-Photo">
                <img src="{{url('/upload')}}/{{$feature->productImage}}" alt="">
            </div>
            <div class="feature-Company" style="font-size: 0.999rem;color: #b3b3b3;">{{$feature->productCompany}}</div>
            <div class="feature-Photo-Name" style="font-weight: 600;font-size: 1.09rem;font-family:sans-serif;">{{$feature->productName}}</div>
            <div class="feature-Pricing"  style="display:flex;flex-direction:row; justify-content:space-between;align-items:center">
                <div class='feature-Rat-Prc'>
                    <div class="rating">
                        <input value="5" name="rating" id="star5" type="radio">
                        <label for="star5"></label>
                        <input value="4" name="rating" id="star4" type="radio">
                        <label for="star4"></label>
                        <input value="3" name="rating" id="star3" type="radio">
                        <label for="star3"></label>
                        <input value="2" name="rating" id="star2" type="radio">
                        <label for="star2"></label>
                        <input value="1" name="rating" id="star1" type="radio">
                        <label for="star1"></label>
                      </div>
                <h5 class="feature-Price" style="color:#049804;">{{$feature->productPrice}}</h5>
                </div>
                <div class="feature-cart" style="background: #dde2dd;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid #dde2dd;
                border-radius: 50%;">
                    <a href="{{url('cart')}}/{{$feature->id}}"><i class="fa-solid fa-cart-shopping" id="fcart"></i></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    {{-- best selling of the year --}}
    {{-- <div class="bestSelling">
        <img src="{{url('assets/image/bestSelling.jpg')}}" alt="">
    </div> --}}
    {{-- offers --}}
    <div class="offers">
        <div class="crazy-deal">
            <h4 style="font-size: 20px;font-weight: 400;">crazy deals</h4>
            <h4 style="font-size: 35px;font-weight: bold;">buy 1 get 1 free</h4>
            <h4 style="font-size:15px;">The best classical dress is on sale at EastDress Attire</h4>
            <button class="learn-more"><a href="{{url('/Buy1Get1Free')}}" style="text-decoration: none; color:white;">Learn More</a></button>
        </div>
        <div class="classic-deal">
            <h4 style="font-size: 20px;font-weight: 400;">spring/summer</h4>
            <h4 style="font-size: 35px;font-weight: bold;">upcomming season</h4>
            <h4 style="font-size:15px;">The best classical dress is on sale at EastDress Attire</h4>
            <a href="{{url('summerCollection')}}"><button class="collection">Collection</button></a>
        </div>
    </div>
    {{-- <div class="connect">
        <div class="text">
            <h2>Sign Up For Newsletters</h2>
            <h4>Get E-mail updates about our latest shop and <span style="color:rgb(183, 210, 49);">special offers.</span></h4>
        </div>
        <div class="email">
            <input type="email" placeholder="Your email address">
            <button>Sign Up</button>
        </div>
    </div> --}}
    <footer>
        <div class="detail">
                {{-- <div class="logo">
            <img src="{{url('assets/image/logo.png')}}" alt="loading">
            </div> --}}
            <div>
                <h3>Contact</h3>
            </div>
            <div>
                <h3 class="footerHeading">Address:</h3><span class="footerPara">Hetauda 1, Choukitole</span>
                <h3 class="footerHeading">Phone:</h3><span class="footerPara">+977 9817204236</span>
                <h3 class="footerHeading">Hours:</h3><span class="footerPara">6:00 - 10:00 Sun - Fri</span>
            </div>
            <div>
                <h2 style="font-size:20px;">Follow Us</h2>
            </div>
            <div style="display: flex;gap:7px;">
                <a style="color:white;" href="https://www.facebook.com/"> <i class="fa-brands fa-facebook-f"></i></a>
                <a style="color:white;" href="https://x.com/?lang=en"><i class="fa-brands fa-twitter"></i></a>
                <a style="color:white;" href="https://www.instagram.com/"> <i class="fa-brands fa-instagram"></i></a>
                <a style="color:white;" href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a>
                <a style="color:white;" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="about">
            <div>
                <h3>About</h3>
            </div>
            <div class="aboutDetail">
                <span><a href="" class="footerlinks">About Us</a></span>
                <span><a href="" class="footerlinks">Delivery Information</a></span>
                <span><a href="{{url('privacyandpolicy')}}" class="footerlinks">Privacy Policy</a></span>
                <span><a href="" class="footerlinks">Terms & Conditions</a></span>
                <span><a href="" class="footerlinks">Contact Us</a></span>
            </div>
        </div>
        <div class="myaccount">
            <div>
                <h3>My Account</h3>
            </div>
            <div class="aboutDetail">
                <span><a href="" class="footerlinks">Sign in</a></span>
                <span><a href="" class="footerlinks">View Cart</a></span>
                <span><a href="" class="footerlinks">My Wishlist</a></span>
                <span><a href="" class="footerlinks">track My Order</a></span>
                <span><a href="" class="footerlinks">Help</a></span>
            </div>
        </div>
    </footer>
    <script src="{{url('assets/js/index.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>