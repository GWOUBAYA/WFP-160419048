@extends('admin.conquer2.layouts.dashboard')
@section('content')
<h1>Category name that doesn't have any medicine</h1>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoryCollection as $name)
                <tr>
                    <td>{{ $name->name }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection