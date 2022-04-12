@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>All drug category data</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoryCollection as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['description'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
