@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add User  @endslot
@endcomponent


    <div class="card">
    <form class="tablelist-form" autocomplete="off">
        <div class="card-body">
            <div class="mb-3"  style="display: none;">
                <label for="id-field" class="form-label">ID</label>
                <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">Ward Name</label>
                <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success" id="add-btn">Add User</button>
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection