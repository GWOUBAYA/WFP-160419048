@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Category that only have 1 medicine product</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoryCollection as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection