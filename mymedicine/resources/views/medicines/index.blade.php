@extends('admin.conquer2.layouts.dashboard')
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
        </tr>
    </thead>
    <tbody>
        @foreach ($medicineCollection as $medicine)
        <tr>
            <td>{{ $medicine['generic_name'] }}</td>
            <td>{{ $medicine['form'] }}</td>
            <td>{{ $medicine['restriction_formula'] }}</td>
            <td>{{ $medicine['description'] }}</td>
            <td>{{ $medicine['faskes_tk1'] }}</td>
            <td>{{ $medicine['faskes_tk2'] }}</td>
            <td>{{ $medicine['faskes_tk3'] }}</td>
            <td>{{ $medicine['category']['name'] }}</td>
            <td><a class="btn btn-default" href="{{route('medicines.show',$d->id)}}" data-target="#mymodal"
                    data-toggle="modal">show</a>
                <a class="btn btn-default" data-toggle="modal" href="#basic">Show W/ Ajaxa</a>
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
        url: '{{route("medicines.showinfo")}}',
        data: '_token=<?php echo csrf_token() ?>',
        success: function(data) {
            $("#showinfo").html(data.msg);
        }
    });
}
</script>
@endsection