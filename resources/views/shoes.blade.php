<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offers</title>
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/buy1get1free.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{url('assets/image/logo.png')}}" alt="loading">
            <h2>EasyDress Attire</span>
        </div>
        <div class="links">
            <ul class="link">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('aboutus')}}">About</a></li>
                <li><a href="{{url('top')}}">Top</a></li>
                <li><a href="{{url('bottom')}}">Bottom</a></li>
                <li><a href="{{url('shoes')}}">shoes</a></li>
                <li><a href="{{url('cart')}}"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <div class="header" class="flex flex-row">
        <center><h1>Shoes collection</h1></center>
    </div>
    {{-- <select name="user_input" id="" style="position: absolute;top:0.5rem;right:20rem;"> --}}
        {{-- <option value="none">none</option>
        <option value="adidas">adidas</option>
        <option value="zara">zara</option>
        <option value="puma">puma</option>
    </select> --}}
    <form action="">
        <div>
            <input type="text" name="userInput" placeholder="Search By Company" value="{{$search}}">
        </div>
        <div>
            <a href="">
                <button type="submit" class="btn btn-success">Search</button>
            </a>
        </div>
        <div>
            <a href="{{url('/shoes')}}">
                <button class="btn btn-primary" type="button">reset</button>
            </a>
        </div>
        </form>
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" style="position:absolute;top:0;" role="alert">
        <strong> 
            {{session('message')}}
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    <div class="feature-Photo-Collection">
        @foreach ($products as $product)
        
        @if ($product->productType == "shoes")
        <div class="feature-photos">
            <div class="feature-Photo">
                <a href="{{url('viewcartitem')}}/{{$product->id}}">
                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="loading please wait...">
                </a>
            </div>
            <div class="feature-Company" style="font-size: 0.999rem;color: #b3b3b3;">{{$product->productCompany}}</div>
            <div class="feature-Photo-Name" style="font-weight: 600;font-size: 1.09rem;font-family:sans-serif;">{{$product->productName}}</div>
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
                <h5 class="feature-Price" style="color:#049804;">{{$product->productprice}}</h5>
                </div>
                <div class="feature-cart" style="background: #dde2dd;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 2px solid #dde2dd;
                border-radius: 50%;">
                    <a href="{{url('cart')}}/{{$product->id}}"><i class="fa-solid fa-cart-shopping" id="fcart"></i></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>