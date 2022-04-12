@extends('layouts.main')

@section('container')
    <div class="album py-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($medicine_collection as $medicine)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('img/'.$medicine['img_path']) }}" alt="">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                {{-- <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/medicine/1">View</a></button>
                                </div> --}}
                                <h1 style="color:black">{{ $medicine['generic_name']  }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://static.wikia.nocookie.net/dota2_gamepedia/images/3/36/Healing_Salve_icon.png"
                            alt="">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/medicine/2">View</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://static.wikia.nocookie.net/dota2_gamepedia/images/7/70/Enchanted_Mango_icon.png"
                            alt="">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a href="/medicine/3">View</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
