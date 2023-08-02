@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Edit street  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('streets.update',$street->id) }}"  method="POST" >
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
                <label for="customername-field" class="form-label">street Name</label>
                <input type="text" name="name" value="{{ $street->name }}" class="form-control" placeholder="Enter Name" required="">
                <div class="invalid-feedback">Please enter street name.</div>
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
                
                <button type="submit" class="btn btn-success"> Add street</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
<script src="{{ URL::asset('admin_assets/libs/prismjs/prismjs.min.js') }}"></script>
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection