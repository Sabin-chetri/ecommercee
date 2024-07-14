<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cart</title>
    <link rel="stylesheet" href={{url('assets/css/app.css')}}>
    <link rel="stylesheet" href={{url('assets/css/cart.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body> 
        <hr>
    <h1 class="heading">Your Cart List is Here</h1>
    <hr>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary placeorder" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Place Order
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Order</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
{{--           
            @foreach ($products as $product)
            <div style="display: flex;gap:20px;align-items:center;justify-content:space-between;">
                <img style="width: 50px;height: 50px; margin-bottom:5px;" src="{{url('upload')}}/{{$product->productImage}}" alt="">
                
                <h4 style="">{{$product->productName}}</h4>

                <h6>Rs. <span id="abcd">{{$product->productPrice}}</span></h6>
            </div>
            @endforeach --}}
            
<hr>
            <div style="display: flex;justify-content:flex-end;">
                <h5>Total Price: Rs.</h5>
                <h5 id="total-price"></h5>
            </div>
        
        <script>
            // JavaScript to calculate total price
            document.addEventListener("DOMContentLoaded", function() {
                var prices = document.querySelectorAll("#abcd");
                var totalPrice = 0;
        
                for (var i = 0; i < prices.length; i++) {
                    totalPrice += parseFloat(prices[i].textContent);
                }
        
                document.getElementById("total-price").textContent = totalPrice.toFixed(2);
            });
        </script>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>




    <div class="cartList">
        @foreach ($users as $user)
        @if ($uname == $user->id)
            
       @foreach ($user->getCarts as $product)
           
       
        <div class="cartItem">
            <div class="cartImage">
                <img src="{{url('upload')}}/{{$product->productImage}}" alt="">
            </div>
            <div class="cartName">
                <h4>{{$product->productName}}</h4>
            </div>
            <div class="cartPrice">
                <h4 id="abc">Rs. {{$product->productPrice}}</h4>
                {{-- <input id="price" type="number" value = "{{$product->productPrice}}"> --}}
            </div>
            <div class="cartQuantity">
            <input class="quantity" onchange="changed();"type="number" name="user" id="user" value=1 min="1">
            </div>
            <div class="cartTotalPrice">
                <h4 id="fin">
                @php
                    $user = 5;
                    $final = $product->productPrice*$user;
                    echo "$final"
                @endphp
                {{-- {{$product->productPrice}} --}}
                </h4>
            </div>
            <div>
                <a href="{{url('cartDelete')}}/{{$product->id}}"><i class="fa-solid fa-trash delete"></i></a>
            </div>
        </div>
        <hr>
        @endforeach
        @endif
        @endforeach
    </div>
    {{-- <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr> 
        <tr class="cartList">
            <td class="cartImage">
                <img src="{{url('assets/image/logo.png')}}" alt="">
            </td>
            <td class="cartName">
                <h2>abcde</h2>
            </td>
            <td class="cartPrice">
                <h2>78</h2>
            </td>
            <td class="cartQuantity">
                <input type="number" min="1" class="quantity">
            </td>
            <td class="cartTotalPrice">
                <h2>890</h2>
            </td>
        </tr>
    </table> --}}

    {{-- <script>
        function changed(){
        var quantity = document.getElementById('user').value;
        var perPrice = document.getElementById('price').value;
        var f = perPrice*quantity;
        document.getElementById('fin').textContent = f;
    }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>