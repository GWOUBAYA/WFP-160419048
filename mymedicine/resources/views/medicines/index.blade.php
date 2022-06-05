@extends('conquer2.layouts.dashboard')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3>List Informasi</h3><a class="btn btn-default" href="#" onclick="showInfo()">Lihat Rincian
    </div>
    <div id="showinfo" class="panel-body">

    </div>
</div>
<table class="table table-dark">
    <thead>
        <tr>
            <th>Generic Name</th>
            <th>Form</th>
            <th>Restriction Formula</th>
            <th>Description</th>
            <th>Faskes TK 1</th>
            <th>Faskes TK 2</th>
            <th>Faskes TK 3</th>
            <th>Category</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->generic_name }}</td>
            <td>{{ $d->form}}</td>
            <td>{{ $d->restriction_formula}}</td>
            <td>{{ $d->description}}</td>
            <td>{{ $d->faskes1}}</td>
            <td>{{ $d->faskes2}}</td>
            <td>{{ $d->faskes3}}</td>
            <td>{{ $d->category->name}}</td>
            <td>
                <a class="btn btn-default" data-toggle="modal" href="#basic">Show W/ Ajaxa</a>
            </td>
            <td>
                <a class="btn btn-default text-secondary" href="{{route('medicines.edit',$d->id)}}">Edit</a>
            </td>
            <td>
                <form action="{{url('medicines/'.$d->id)}}" method="POST" class="form-horizontal">
                    @csrf @method('DELETE')
                    <button type="submit" value="delete" class="btn btn-default" onclick="if(!confirm('Are you sure to delete this record?')) return false;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
    function showInfo() {
        $.ajax({
            type: 'POST',
            url: '',
            data: '_token=<?php echo csrf_token() ?>',
            success: function(data) {
                $("#showinfo").html(data.msg);
            }
        });
    }
</script>
@endsection