@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Edit Wards  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('wards.update',$ward->id) }}"  method="post" >
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
                <label for="customername-field" class="form-label">Ward No</label>
                <input type="text" name="name" value="{{ $ward->name }}" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter ward name.</div>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted">Select Panchayat</label>
                <select name="panchayat_id" class="form-control" >
                    @foreach ($panchayats as $panchayat)
                    <option value="{{ $panchayat->id }}">{{ $panchayat->name }}</option>
                    @endforeach
                </select>
            </div>
       
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Ward</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection