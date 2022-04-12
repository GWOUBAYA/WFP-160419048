@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Category and drug name that have highest price</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Generic Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine->category_name }}</td>
                    <td>{{ $medicine->generic_name }}</td>
                    <td>{{ $medicine->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection