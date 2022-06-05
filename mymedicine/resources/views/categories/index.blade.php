@extends('conquer2.layouts.dashboard')

@section('content')


@if (session('status'))
<div class="alert alert-success">{{session('status')}}
</div>@endif

@if (session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>@endif

<table class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->description}}</td>
            <td>
                <a class="btn btn-default text-secondary" href="{{route('categories.edit',$d->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{url('categories/'.$d->id)}}" method="POST" class="form-horizontal">
                    @csrf @method('DELETE')
                    <button type="submit" value="delete" class="btn btn-default" onclick="if(!confirm('Are you sure to delete this record?')) return false;">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection