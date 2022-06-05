@extends('conquer2.layouts.dashboard')
@section('content')
<form action="{{route('buyer.store')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Address">
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="button" class="btn btn-default">Cancel</button>
            </div>
        </div>
    </div>
</form>
@endsection