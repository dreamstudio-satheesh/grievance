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
                <label for="customername-field" class="form-label">User Name</label>
                <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter user name.</div>
            </div>

            <div class="mb-3">
                <label for="email-field" class="form-label">Email</label>
                <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required="">
                <div class="invalid-feedback">Please enter an email.</div>
            
            <div class="mb-3">
                <label for="phone-field" class="form-label">Phone</label>
                <input type="text" id="phone-field" class="form-control" placeholder="Enter Phone no." required="">
                <div class="invalid-feedback">Please enter a phone.</div>
            </div>

            <div class="mb-3">
                <label for="date-field" class="form-label">Ward Number</label>
                <input type="text" id="date-field" class="form-control" placeholder="Select Date" required="">
                <div class="invalid-feedback">Please select a Ward Number.</div>
            </div>

            
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection