<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url('assets/css/app.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>About us</title>
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
    <div class="aboutHeader">
        <hr>
        <h1 style="text-align:center;font-size:65px;">About Us</h1>
        <hr>
    </div>
    <div class="aboutPara" style="padding:5rem 10rem; margin:3rem 0;font-size:19px;margin:0 auto;background:rgb(219, 193, 158);">
    <p>
        Welcome to Easy Attire Dress, your ultimate destination for effortless style and timeless fashion. At Easy Attire Dress, we believe that dressing well should be simple, convenient, and enjoyable. Whether you're searching for the perfect outfit for a special occasion or updating your everyday wardrobe, we've got you covered with our curated selection of high-quality apparel and accessories.
    </p>
    <p>
        Founded with a passion for fashion and a commitment to providing exceptional customer service, Easy Attire Dress strives to make shopping for clothing online an easy and enjoyable experience. We understand the importance of feeling confident and comfortable in what you wear, which is why we carefully handpick each item in our collection to ensure both style and quality.
    </p>

<p>
    Our diverse range of products caters to every taste and occasion, from chic dresses and trendy tops to cozy sweaters and stylish accessories. Whether you prefer classic elegance, contemporary flair, or casual comfort, you'll find something that speaks to your personal style at Easy Attire Dress. We are constantly updating our inventory to bring you the latest trends and timeless classics, so you can always stay ahead of the fashion curve.

At Easy Attire Dress, we believe in the power of fashion to inspire and empower individuals. We strive to create a welcoming and inclusive shopping environment where everyone feels valued and respected. Our team is dedicated to providing personalized assistance and expert advice to help you find the perfect pieces to express your unique personality and style.
</p>
</div>
<div>
    <hr>
    <h1 style="text-align:center;font-size:65px;">Our Mission</h1>
    <hr>
    <p style="padding:5rem 10rem; margin:3rem 0;font-size:19px;margin:0 auto;background:rgb(219, 193, 158);">
        At Easy Attire Dress, our mission is simple: to empower individuals to express themselves through fashion while providing them with a seamless and enjoyable shopping experience. We believe that everyone deserves to feel confident and comfortable in what they wear, and we're here to make that a reality.

Our mission is rooted in the belief that fashion is more than just clothing – it's a form of self-expression and a reflection of our personalities, values, and aspirations. We understand the transformative power of a great outfit, and we're dedicated to helping our customers find the perfect pieces to enhance their individual style and boost their confidence.

Central to our mission is the commitment to offer a diverse range of high-quality apparel and accessories that cater to every taste, occasion, and body type. Whether you're looking for sophisticated evening wear, casual weekend attire, or versatile wardrobe staples, we've got you covered with our carefully curated selection of fashion-forward items.

We're passionate about creating a shopping environment that is inclusive, welcoming, and supportive. Our team is dedicated to providing personalized assistance and expert advice to help you find the perfect pieces that reflect your unique personality and style. We believe in celebrating diversity and embracing individuality, and we're committed to ensuring that everyone feels valued and respected when shopping with us.

In addition to offering stylish and affordable fashion, we're also committed to making a positive impact on the world. We believe in operating in an environmentally sustainable and socially responsible manner, and we're constantly seeking ways to reduce our carbon footprint and support ethical and fair labor practices.

Ultimately, our mission is to inspire confidence, spark creativity, and foster self-expression through fashion. We're passionate about helping our customers look and feel their best, today and every day, and we're honored to be a part of their style journey. Thank you for choosing Easy Attire Dress as your trusted fashion destination.
    </p>
</div>
</div>
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
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-pinterest-p"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
    </div>
    <div class="about">
        <div>
            <h3>About</h3>
        </div>
        <div class="aboutDetail">
            <span>About Us</span>
            <span>Delivery Information</span>
            <span>Privacy Policy</span>
            <span>Terms & Conditions</span>
            <span>Contact Us</span>
        </div>
    </div>
    <div class="myaccount">
        <div>
            <h3>My Account</h3>
        </div>
        <div class="aboutDetail">
            <span>Sign in</span>
            <span>View Cart</span>
            <span>My Wishlist</span>
            <span>track My Order</span>
            <span>Help</span>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>