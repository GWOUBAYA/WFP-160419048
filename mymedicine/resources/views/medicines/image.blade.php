<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="row row-cols-3">
            @foreach ($data as $d)
            <div class="col">
                <div class="card">
                    <img src="img/product{{ $d->id }}.jpg" class="card-img-top" alt="{{ $d->generic_name }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $d->generic_name }}</h4>
                        <h6 class="card-text">{{ $d->form }}</h6>
                        <p class="card-text">{{ $d->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>