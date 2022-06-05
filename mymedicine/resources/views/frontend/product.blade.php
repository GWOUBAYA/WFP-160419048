@extends('layout')

@section('title', 'Products')

@section('content')

<div class="container products">

    <div class="row">
        @foreach($medicines as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('images/'.$product->gambar}}" width="500" height="300">
                <div class="caption">
                    <h4>{{$medicines->name}}</h4>
                    <p>{{Str::limit(strtolower($medicines->description),50)}}</p>
                    <p><strong>Price: </strong>{{$medicines->price}}</p>
                    <p class="btn-holder"><a href="#" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>


    </div><!-- End row -->

</div>

@endsection