@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Medicines name, formula and price</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Generic Name</th>
                <th>Form</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicineCollection as $medicine)
                <tr>
                    <td>{{ $medicine['generic_name'] }}</td>
                    <td>{{ $medicine['form'] }}</td>
                    <td>{{ $medicine['price'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

