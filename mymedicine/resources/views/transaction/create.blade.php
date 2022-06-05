@extends('conquer2.layouts.dashboard')
@section('content')
<form action="{{route('buyer.store')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Transaction Date</label>
            <div class="col-md-4">
                <div class="input-group date form_datetime">
                    <input type="text" size="16" readonly="" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-success date-set" type="button"><i class="fa fa-calendar"></i></button>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3">User</label>
            <div class="col-md-4">
                <div class="select2-container form-control select2" id="s2id_select2_sample4"><a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-21"><img class="flag" src="assets/img/flags/by.png">&nbsp;&nbsp;Belarus</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen21" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-21" id="s2id_autogen21"></div><select name="" id="select2_sample4" class="form-control select2 select2-offscreen" tabindex="-1" title="">
                    <option value=""></option>
                </select>
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