@extends('conquer2.layouts.dashboard')
@section('content')
<form action="{{url('categories/'.$data->id)}}" method="POST" class="form-horizontal">
    @csrf
    @method("PUT")
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" value="{{$data->name}}">

                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input id="description" name="description" type="text" class="form-control" placeholder="Description" value="{{$data->description}}">
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