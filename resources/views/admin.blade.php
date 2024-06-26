<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container .mainpage .heading{
            font-size: 35px;
            padding: 20px 0;
            width: 100%;
            border-radius: 8px;
            text-align: center;
            /* border-bottom: 2px solid blue; */
            background: #ffffff;
            box-shadow:  14px 14px 55px #b5b5b5,
                        14px 14px 55px #ffffff;
        }
        .container{
            display: flex;
            width: 100%;
            position: absolute;
            top: 0;
        }
        .sidebar{
            width: 20%;
            background: rgb(1, 1, 109);
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        .sidebar *{
            color: white;
        }
        .sidebar h1{
            text-align: center;
            font-size:25px; 
        }
        .mainpage{
            width: 80%;
            position: relative;
        }
        .tabContainer{
            margin-top:6rem;
        }
        .tabContainer ul li a{
            text-decoration: none;
            font-size: 20px;
            width: 100%;
        }
        .tabContainer ul li{
            padding: 7px;
            border-radius: 8px;
        }
        .tabContainer ul li:hover{
            background: grey;
        }
        table{
            width: 100%;
            outline: none;
            border: 2px solid rgb(56, 56, 1);
        }
        td{
            padding: 10px;
            text-align: left;
            font-size: 20px;
        }
        tr{
            text-align: left;
        }
        th{
            margin: 2px;
        padding: 6px 0;
        font-size: 25px;
        }
        .image{
            width: 20%;
            height: 10%;
            padding: 0 0 0 20px;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }
        .image img{
            width: 30%;
        }
        .add-item {
            width: 8rem;
            height: 3rem;
        }
        .add-item h1 a:hover{
            background: rgb(210, 210, 13);
            /* color: black; */
        }
        .add-item h1 a{
            text-decoration: none;
            padding: 8px;
            transition: all 0.3s ease;
            display: block;
            font-size: 20px;
            color: white;
            border: 2px solid black;
            border-radius: 5px;
            background: rgb(140, 140, 12);
        }
        .overall-calculation{
            display: flex;
            flex-direction: row;
            margin: 5px 30px;
            justify-content: space-between;
        }
        .overall-calculation div{
            width: 20%;
            height: 7rem;
            border-radius: 10px;
            background: rgb(26, 51, 174);
            color: white;
            display: flex;
            gap: 10px;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            /* border: 2px solid blue; */
        }
        .title{
            color: rgb(222, 214, 214);
            font-size: 14px;
        }
        .icon , .detail{
            padding: 0 0 0 5px;
        }
        .detail{
            display: flex;
            width: 40%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .overall-calculation div .icon{
            width: 21%;
            height: 3rem;
        }
        .overall-calculation div .detail{
            display: flex;
            flex-direction: column;
            gap: 2px;
            width: 60%;
            justify-content: center;
            align-items: flex-start;
        }
        .number{
            font-size: 20px;
        }
        details > summary {
            list-style: none;
        }
        details .offer{
            font-size: 10px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h1>Dashboard</h1>
            <div class="tabContainer">
                <ul>
                    <li><a href="#first">Dashboard</a></li>
                    <li><a href="#sec">Customers</a></li>
                    <details>
                        <summary>
                            <li><a href="#thd">fullset</a></li>
                        </summary>
                        <ul>
                            <li><a href="#top">Top</a></li>
                            <li><a href="#bottom">Bottom</a></li>
                            <li><a href="#shoes">Shoes</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary>
                            <li><a href="#offers">Offers</a></li>
                        </summary>
                        <ul>
                            <li><a href="#offer1" class="offer">Buy 1 Get 1 Free</a></li>
                            <li><a href="#offer2" class="offer">Upcoming Season</a></li>
                        </ul>
                    </details>
                </ul>
            </div>
        </div>
        <div class="mainpage">
            <h1 class="heading">Admin Panel</h1>
            <div class="tabContent">
                <div id="offer2">
                    <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                        @if($product->productType == 'summerCollection')
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div id="offer1"> 
                    <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                        @if($product->productType == 'buy1get1free')
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div id="top">
                <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            @if($product->productType === "top")
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                
                </div>
                <div id="bottom">
                    <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            @if($product->productType === "bottom")
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div id="shoes">
                    <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            @if($product->productType === "shoes")
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
                <div id="first">
                    <div class="overall-calculation">
                        <div class="totalSale">
                            <div class="icon">
                                <img src="{{url('assets/image/dollar-sign.png')}}" style="width: 100%; height:100%;" alt="loading">
                            </div>
                            <div class="detail">
                                <h4 class="title">Total Sales</h4>
                                <h4 class="number">Rs 2424534</h4>
                            </div>
                        </div>
                        <div class="totalOrder">
                            <div class="icon">
                                <img src="{{url('assets/image/shopping-bag.png')}}" style="width: 100%; height:100%;" alt="loading">

                            </div>
                            <div class="detail">
                                <h4 class="title">Total Orders</h4>
                                <h4 class="number">Rs 2424534</h4>
                            </div>
                        </div>
                        <div class="totalQuantity">
                            <div class="icon">
                                <img src="{{url('assets/image/box.png')}}" style="width: 100%; height:100%;" alt="loading">

                            </div>
                            <div class="detail">
                                <h4 class="title">Total Quantity</h4>
                                <h4 class="number">{{$totalProduct}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sec">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>E-mail</th>
                            <th>location</th>
                            <th>contact</th>
                            <th>action</th>
                        </tr>
                        @foreach ($customers as $customer)
                            
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->email}}</td>
                            <td>{{$customer->location}}</td>
                            <td>{{$customer->contact}}</td>
                            <td>
                                <a href="{{url('editCustomer')}}/{{$customers->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                {{-- <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <div id="thd">
                    <div class="add-item">
                        <h1><a href="{{url('addProduct')}}"><i class="fa-solid fa-plus"></i>Add Item</a></h1>
                    </div>
                    <table>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            @if ($product->productType == 'fullSet')
                        <tr>
                            <td class="image">
                                <img src="{{url('/upload')}}/{{$product->productImage}}" alt="">
                            </td>
                            <td>
                                {{$product->productCompany}}
                            </td>
                            <td>
                                {{$product->productName}}
                            </td>
                            <td>
                                
                                {{$product->productPrice}}
                            </td>
                            <td>
                                5
                            </td>
                            <td>
                                <a href="{{url('editProduct')}}/{{$product->id}}" style="color:blue;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{url('deleteProduct')}}/{{$product->id}}"><i class="fa-solid fa-trash" style="color:red;"></i></a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        let tabContainer = document.querySelector('.tabContainer');
        let tabContent = document.querySelectorAll('.tabContent > div');

        tabContent.forEach((content,index)=>{
            if(index !== 5){
            content.setAttribute('hidden', 'true');
            }
        });

        tabContainer.addEventListener('click', (e) => {
            const clickedTab = e.target.closest('a');
            if(!clickedTab) return;
            e.preventDefault();

            const clickedLink = clickedTab.getAttribute('href');

            tabContent.forEach((content,index) => {
            content.setAttribute('hidden','true');
        });
        document.querySelector(clickedLink).removeAttribute('hidden');
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>