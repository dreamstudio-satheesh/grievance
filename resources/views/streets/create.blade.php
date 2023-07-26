@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add street  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('streets.store') }}"  method="post" >
        @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">street Name</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter street name.</div>
            </div>
           
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add street</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection