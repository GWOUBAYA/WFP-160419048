@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Drugs that only have 1 form</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Generic Name</th>
                <th>Total Form</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine->generic_name }}</td>
                    <td>{{ $medicine->total_form }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection