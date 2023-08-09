@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Edit User  @endslot
@endcomponent


    <div class="card">
        <form action="{{ route('users.update',$user->id) }}"  method="POST" >
            @csrf
            @method('PUT')
        <div class="card-body">

            @if ($errors->any())
            <div class="mb-3">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">User Name</label>
                <input type="text" name="name" id="customername-field" class="form-control" value="{{ $user->name }}"required="">
                <div class="invalid-feedback">Please enter user name.</div>
            </div>

            <div class="mb-3">
                <label for="email-field" class="form-label">Email</label>
                <input type="email" name="email" id="email-field" class="form-control"value="{{ $user->email }}" required="">
                <div class="invalid-feedback">Please enter an email.</div>
            
            <div class="mb-3">
                <label for="phone-field" class="form-label">Phone</label>
                <input type="text" name="mobile_number" id="phone-field" class="form-control" value="{{ $user->mobile_number }}" required="">
                <div class="invalid-feedback">Please enter a phone.</div>
            </div>

            <div class="mb-3">
                <label for="phone-field" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control" value="">
                <div class="invalid-feedback">Please enter password.</div>
            </div>

           

           
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">                
                <input type="submit" class="btn btn-success" value="Update User">
            </div>
        </div>
    </form>
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection