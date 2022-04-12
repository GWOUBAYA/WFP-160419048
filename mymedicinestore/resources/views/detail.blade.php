<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .med{
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px;
            width: 250px;
        }
    </style>
</head>
<body>
    <h1>Detail Product</h1>
    <div>
        @if ($id ==1)
            <h2>Paracetamol <br></h2>
            <img src="{{asset('img/paracetamol.jpg')}}" class ="med">
            <p>Harga : Rp. 10.000</p>
        @elseif ($id ==2) 
            <h2>Panadol<br></h2>
            <img src="{{asset('img/panadol.jpeg')}}" class ="med">
            <p>Harga : Rp. 12.000</p>
        @else
            <h2>Mixagrip<br></h2>
            <img src="{{asset('img/mixagrip.jpg')}}" class ="med">
            <p>Harga : Rp. 5.000</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>