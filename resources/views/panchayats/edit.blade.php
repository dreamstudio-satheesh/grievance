@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Edit panchayat  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('panchayats.update',$panchayat->id) }}"  method="POST" >
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
                <label for="customername-field" class="form-label">Panchayat Name</label>
                <input type="text" name="name" value="{{ $panchayat->name }}" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">president Name</label>
                <input type="text" name="pname" value="{{ $panchayat->pname }}" class="form-control" placeholder="Enter president Name" required="">
                <div class="invalid-feedback">Please enter president name.</div>
            </div>
           
            <div class="mb-3">
                <label for="customername-field" class="form-label">president Mobile</label>
                <input type="text" name="pmobile" value="{{ $panchayat->pmobile }}" class="form-control" placeholder="Enter president Mobile" required="">
                <div class="invalid-feedback">Please enter president Mobile.</div>
            </div>

            <div class="mb-3">
                <label for="customername-field" class="form-label">vice president Name</label>
                <input type="text" name="vname" value="{{ $panchayat->vname }}" class="form-control" placeholder="Enter president Name" required="">
                <div class="invalid-feedback">Please enter president name.</div>
            </div>
            <div class="mb-3">
                <label for="customername-field" class="form-label">vice president Mobile</label>
                <input type="text" name="vmobile" value="{{ $panchayat->vmobile }}" class="form-control" placeholder="Enter president Mobile" required="">
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
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection