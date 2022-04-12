<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
     .image{
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px;
            width: 250px;
        }
</style>
<body>
    <h1>Detail Medical Equipment</h1>
    <div>
        @if ($id ==1)
            <h2>Tensimeter <br></h2>
            <img src="{{asset('img/tensimeter.jpg')}}" class ="image">
            <p>Harga : Rp. 250.000</p>
        @elseif ($id ==2) 
            <h2>Termometer<br></h2>
            <img src="{{asset('img/termometer.jpg')}}" class ="image">
            <p>Harga : Rp. 50.000</p>
        @else
            <h2>Masker<br></h2>
            <img src="{{asset('img/masker.jpg')}}" class ="image">
            <p>Harga : Rp. 120.000</p>
        @endif
        {{-- Test {{ $id }} --}}
    </div>
</body>
</html>