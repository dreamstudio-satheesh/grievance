@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add Wards  @endslot
@endcomponent


    <div class="card">
    <form method="POST" action="{{ route("users.store") }}" class="tablelist-form" autocomplete="off">
        @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">Ward Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" value="Submit" class="btn btn-success" id="add-btn">Add Ward</button>
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection