@extends('conquer2.layouts.dashboard')
@section('content')
<form action="{{route('buyer.store')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Services <span class="required" aria-required="true">
                    * </span>
            </label>
            <div class="col-md-4">
                <div class="checkbox-list" data-error-container="#form_2_services_error">
                    <label>
                        <div class="checker"><span class=""><input type="checkbox" value="1" name="service"></span></div> Service 1
                    </label>
                    <label>
                        <div class="checker"><span><input type="checkbox" value="2" name="service"></span></div> Service 2
                    </label>
                    <label>
                        <div class="checker"><span><input type="checkbox" value="3" name="service"></span></div> Service 3
                    </label>
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