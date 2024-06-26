<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>productName</td> 
            <td>productPrice</td>
            <td>productDescription</td>
            <td>img</td> 
        </tr>
        @foreach ($all as $sin)
        <tr> 
            <td>{{$sin->id}}</td>  
            <td>{{$sin->productName}}</td>  
            <td>{{$sin->productPrice}}</td>  
            <td>{{$sin->productDescription}}</td>  
            <td>
                <img src="" alt="load">
            </td>  
            <td>{{$sin->getuser->email}}</td>  
        </tr>
        @endforeach
    </table>
</body>
</html>