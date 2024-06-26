<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">

</head>
<body>
    <form action="{{url('login')}}" method="POST">
        @csrf
        <fieldset>
            <legend>Login Form</legend>
        <div>
            <label for="">Email</label><br>
            <input type="required" placeholder="Enter your email" name="email">
            <span style="color: rgb(243, 60, 142);">
                @error('email')
                {{$message}}
                @enderror
            </span>
        </div>
        <div>
            <label for="">Password</label><br>
            <input type="password" placeholder="Enter your password" name="password">
            <span style="color: rgb(243, 60, 142);">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="forget">
            <div>
                <a href="{{url('createaccount')}}">create account</a>
            </div>
            <div>
                <a href="">forget password</a>
            </div>
        </div>
        <div class="button">
            <div>
                <input type="submit" value="submit">
            </div>
            <div>
                <input type="reset" value="reset">
            </div>
        </div>
    </fieldset>
    </form>
</body>
</html>