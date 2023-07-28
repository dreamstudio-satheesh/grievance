@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add division  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('divisions.store') }}"  method="POST" >
        @csrf
        <div class="card-body">
            

            <div class="mb-3">
                <label for="customername-field" class="form-label">Division No</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter No" required="">
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">JE Name</label>
                <input type="text" name="jename"  class="form-control" placeholder="Enter JE Name" required="">
            </div>
           
            <div class="mb-3">
                <label for="customername-field" class="form-label">JE Mobile</label>
                <input type="text" name="jemobile"  class="form-control" placeholder="Enter JE Mobile" required="">
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">AE Name</label>
                <input type="text" name="aename"  class="form-control" placeholder="Enter AE Name" required="">
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">AE Mobile</label>
                <input type="text" name="aemobile"  class="form-control" placeholder="Enter AE Mobile" required="">
            </div>

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Division</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection