<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    hello world

    <hr>
    <table>
        @foreach ($items as $item)
        @if($item->id == $uname)
        <td>
           @foreach ($item->getCarts as $itm)
           {{$itm->productName}}
               {{$itm->productPrice}}
           @endforeach
        </td>
        @endif
        @endforeach
    </table>
</body>
</html>