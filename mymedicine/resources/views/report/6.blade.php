@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Average price of each drug category</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Average price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoryCollection as $collection)
                <tr>
                    <?php $avg = 'IFNULL(AVG(price),0)' ?>
                    <td>{{ $collection->name }} </td>
                    <td>{{ $collection->$avg }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection