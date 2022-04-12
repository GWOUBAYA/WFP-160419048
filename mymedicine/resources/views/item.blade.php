@extends('layouts.main')

@section('container')
    <img src="{{$med["img"]  }}" alt="" >
    <h1>{{ $med['med_name'] }}</h1>
    <p>{{ $med['description'] }}</p>
@endsection
