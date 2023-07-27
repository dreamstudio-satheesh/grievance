@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add panchayat  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('panchayats.store') }}"  method="post" >
        @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">Panchayat Name</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">president Name</label>
                <input type="text" name="pname"  class="form-control" placeholder="Enter president Name" required="">
                <div class="invalid-feedback">Please enter president name.</div>
            </div>
           
            <div class="mb-3">
                <label for="customername-field" class="form-label">president Mobile</label>
                <input type="text" name="pmobile"  class="form-control" placeholder="Enter president Mobile" required="">
                <div class="invalid-feedback">Please enter president Mobile.</div>
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">vice president Name</label>
                <input type="text" name="vname"  class="form-control" placeholder="Enter president Name" required="">
                <div class="invalid-feedback">Please enter president name.</div>
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">vice president Mobile</label>
                <input type="text" name="vmobile"  class="form-control" placeholder="Enter president Mobile" required="">
                <div class="invalid-feedback">Please enter president Mobile.</div>
            </div>

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Panchayat</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection