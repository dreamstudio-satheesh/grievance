@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add User  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('users.store') }}"  method="POST" >
            @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">User Name</label>
                <input type="text" name="name" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter user name.</div>
            </div>

            <div class="mb-3">
                <label for="email-field" class="form-label">Email</label>
                <input type="email" name="email" id="email-field" class="form-control" placeholder="Enter Email" required="">
                <div class="invalid-feedback">Please enter an email.</div>
            
            <div class="mb-3">
                <label for="phone-field" class="form-label">Phone</label>
                <input type="text" name="mobile_number" id="phone-field" class="form-control" placeholder="Enter Phone no." required="">
                <div class="invalid-feedback">Please enter a phone.</div>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">Select Ward</label>
                <select name="ward_id" class="form-control" >
                    @foreach ($wards as $ward)
                    <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                    @endforeach
                </select>
                
            </div>

           
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <input type="submit" class="btn btn-success" value="Add User">
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection