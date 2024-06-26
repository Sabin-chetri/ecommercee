<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Item</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
                background: #e0e0e0;
                margin: 0;
                padding: 0
        }
        .container{
            width: fit-content;
            position: absolute;
            top: 58%;
            left: 50%;
            font-size: 1.5rem;
            transform: translate(-50%,-50%);
        }
        form{
            padding:40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 8px;
            width: 350px;
            border-radius: 30px;
            background: #e0e0e0;
            box-shadow:  20px 20px 60px #bebebe,
            -20px -20px 60px #ffffff;
	    animation: bounce-in-top 1.1s both;
        }
        input{
            padding: 6px 12px;
            border-radius: 8px;
            font-size: 18px;
            background: white;
            border: 1px solid black;
            outline: none;
        }
        input::placeholder{
            font-size: 14px;
            color: rgb(17, 54, 113);
        }
        button{
            padding: 8px 12px;
            background: white;
            border: 2px solid black;
            outline: none;
            border-radius: 8px;
            font-size: 17px;
            transition: all 0.3s ease;
        }
        button:hover{
            background: black;
            color: white;
        }
        h1{
            position: absolute;
            top:-20px;
            width: 100%;
            line-height: 6rem;
            font-size: 3.5rem;
            box-shadow: 5px 0px 5px #bebebe;
            height: 6rem;
        }
        @keyframes bounce-in-top {
                0% {
                        transform: translateY(-500px);
                        animation-timing-function: ease-in;
                        opacity: 0;
                }
                38% {
                        transform: translateY(0);
                        animation-timing-function: ease-out;
                        opacity: 1;
                }
                55% {
                        transform: translateY(-65px);
                        animation-timing-function: ease-in;
                }
                72% {
                        transform: translateY(0);
                        animation-timing-function: ease-out;
                }
                81% {
                        transform: translateY(-28px);
                        animation-timing-function: ease-in;
                }
                90% {
                        transform: translateY(0);
                        animation-timing-function: ease-out;
                }
                95% {
                        transform: translateY(-8px);
                        animation-timing-function: ease-in;
                }
                100% {
                        transform: translateY(0);
                        animation-timing-function: ease-out;
  }
}
    </style>
</head>
<body>
    <center><h1>{{$name}}</h1></center>
        <div class="container">
        <form action="{{url($link)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div><label for="">Product Name</label></div>
            <div><input type="text" placeholder="Enter Product Name" name="productName" value="{{$dress->productName}}">
            <span style="color: red;font-size:15px;">
                @error('productName')
                    {{$message}}
                @enderror
            </span>
            </div>
            <div><label for="">Product Company</label></div>
            <div><input type="text" placeholder="Enter Product Company" name="productCompany" value="{{$dress->productCompany}}">
            <span style="color: red;font-size:15px;">
                @error('productCompany')
                    {{$message}}
                @enderror
            </span>
            </div>
            <div><label for="">Product Price</label></div>
            <div><input type="number" placeholder="Enter Product Price" name="productPrice" value="{{$dress->productPrice}}">
            <span style="color: red;font-size:15px;">
                @error('productPrice')
                    {{$message}}
                @enderror
            </span>
            </div>
            <div><label for="">Product Image</label></div>
            <div><input type="file" placeholder="Enter Product Image" name="productImage">
            <span style="color: red;font-size:15px;">
                @error('productImage')
                    {{$message}}
                @enderror
            </span>
            </div>
            <div><button style="margin:10px;">Submit</button><button>reset</button></div>
        </form>
        </div>
        </body>
</html>