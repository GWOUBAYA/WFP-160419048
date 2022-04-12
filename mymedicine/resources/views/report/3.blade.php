@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>ALl medicines name, formula, and category name</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Generic Name</th>
                <th>Form</th>
                <th>Price</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine['generic_name'] }}</td>
                    <td>{{ $medicine['form'] }}</td>
                    <td>{{ $medicine['price'] }}</td>
                    <td>{{ $medicine['category_name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection