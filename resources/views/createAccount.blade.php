<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('http://127.0.0.1:8000/assets/image/createacc.jpg');
            background-repeat: none;
            background-size: 100% 100%;
        }
        form{
            font-size: 20px;
            border: 1px solid blue;
            display: flex;
            width: 350px;
            flex-direction: column;
            padding: 20px;
            gap: 5px;  
            backdrop-filter: blur(2px);
            box-shadow: 2px 2px 5px black,
                        -2px -2px 5px black;
        }
        label{
            font-size: 22.5px;
        }
        input{
            padding: 6px 12px;
            font-size: 18px;
            width: 90%;
            outline: none;
            border: 2px solid black;
            border-radius: 8px;
        }
        input[type="submit"],input[type="reset"]{
            width: 5rem;
        }
    </style>
</head>
<body>
    <form action="{{url('createaccount')}}" method="POST">
        @csrf
        <center><h1>Create Account</h1></center><br>
        <div>
            <label for="">Full Name</label>
        </div>
        <div>
            <input type="text" name="fullname" placeholder="Enter your fullname" value="{{old('fullname')}}">
            <span style="color:red;">
                @error('fullname')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div>
            <label for="">Location</label>
        </div>
        <div>
            <input type="text" name="location" placeholder="Enter your location" value="{{old('location')}}">
            </span>
        </div>
        <div>
            <label for="">Contact</label>
        </div>
        <div>
            <input type="number" name="contact" placeholder="Enter your contact" value="{{old('contact')}}">
        </div>
        <div>
            <label for="">Email</label>
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
            <span style="color:red;">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div>
            <label for="">Password</label>
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter your password">
            <span style="color:red;">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <br>
        <div class="button">
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </div>
    </form>
</body>
</html>