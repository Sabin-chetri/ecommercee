<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: 100%;
            width: 100%;
        }
        .item{
            height: 95vh;
            display: flex;
            flex-direction: row;
        }
        .image{
            width: 50%;
        }
        .image img{
            width: 100%;
            height: 100%;
            /* transform: rotateY(180deg); */
        }
        .detail{
            display: flex;
            /* border: 2px solid black; */
            gap: 2.5rem;
            margin-top: 3rem;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
            width: 30%;
        }
        .radio-button-container {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .radio-button {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .radio-button__input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        .radio-button__label {
            display: inline-block;
            padding-left: 30px;
            margin-bottom: 10px;
            position: relative;
            font-size: 15px;
            color: #402f2f;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        .radio-button__custom {
            position: absolute;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #555;
            transition: all 0.3s ease;
        }

        .radio-button__input:checked + .radio-button__label .radio-button__custom {
            background-color: #4c8bf5;
            border-color: transparent;
            transform: scale(0.8);
            box-shadow: 0 0 20px #4c8bf580;
        }

        .radio-button__input:checked + .radio-button__label {
            color: #4c8bf5;
        }

        .radio-button__label:hover .radio-button__custom {
            transform: scale(1.2);
            border-color: #4c8bf5;
            box-shadow: 0 0 20px #4c8bf580;
            }
        .checkout #checkout{
            padding: 15px 22px;
            font-size: 20px;
            background: rgb(42, 38, 38);
            color: white;
            transition: all 0.3s ease;
        }
        .checkout #checkout:hover{
            background: rgb(202, 196, 196);
            color: rgb(42, 38, 38);
        }
</style>
</head>
<body>
    <div class="item">
        <div class="image">
            <img src="{{url('/upload')}}/{{$product->productImage}}" alt="loading please wait...">
        </div>
        <div class="detail">
            <div class="pname">
                <h1>{{$product->productName}}</h1>
            </div>
            <div class="pname">
                <h1>{{$product->productCompany}}</h1>
            </div>
            <div class="pname">
                <h1>Rs {{$product->productPrice}}</h1>
                <h6>tax included.</h6>
            </div>
            <div class="size">
                <center><h3>choose your size</h3></center><br>
                <div class="radio-button-container">
                    <div class="radio-button">
                    <input type="radio" class="radio-button__input" id="radio1" name="radio-group">
                    <label class="radio-button__label" for="radio1">
                      <span class="radio-button__custom"></span>
                      X
                    </label>
                  </div>
                  <div class="radio-button">
                    <input type="radio" class="radio-button__input" id="radio2" name="radio-group">
                    <label class="radio-button__label" for="radio2">
                      <span class="radio-button__custom"></span>
                      XL
                    </label>
                  </div>
                  <div class="radio-button">
                    <input type="radio" class="radio-button__input" id="radio3" name="radio-group">
                    <label class="radio-button__label" for="radio3">
                      <span class="radio-button__custom"></span>
                     XXL
                    </label>
                  </div>
                  <div class="radio-button">
                    <input type="radio" class="radio-button__input" id="radio4" name="radio-group">
                    <label class="radio-button__label" for="radio4">
                      <span class="radio-button__custom"></span>
                      XXXl
                    </label>
                  </div>
                  </div>
            </div>
            <div class="guarantee">
                <div style="color:green;">
                    <h3>&check;&nbsp;90 days money back guarantee</h3>
                    <h3>&check;&nbsp;100% secure checkout</h3>
                </div>
            </div>
            <div class="checkout">
                <button type="button" id="checkout" class="btn btn-primary placeorder" data-bs-toggle="modal" data-bs-target="#exampleModal">Check Out</button>
                <button style="padding: 17px 25px;background:black;border:1px solid blue;border-radius:8px; position:relative;top:2px;"><a href="{{url('cart')}}/{{$product->id}}"><i class="fa-solid fa-cart-shopping" id="fcart" style="color:white;"></i></a></button>
                <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Order</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>