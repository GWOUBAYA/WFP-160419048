@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Number of category that have data</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Number of category that have medicine</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $number }}</td>
            </tr>
        </tbody>
    </table>
@endsection
