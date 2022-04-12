@extends('layouts.conquer')

@section('content')

<body>
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->description}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
@endsection