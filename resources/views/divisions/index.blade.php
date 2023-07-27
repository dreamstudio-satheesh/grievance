@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Divisions  @endslot
@endcomponent


<div class="row g-4 mb-3">
    <div class="col-sm-auto">
        <div class="search-box ms-2">
            <input type="text" class="form-control search" placeholder="Search...">
            <i class="ri-search-line search-icon"></i>
        </div>
        
    </div>
    <div class="col-sm">
        <div class="d-flex justify-content-sm-end">
            <div>
                {{-- <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button> --}}
                <a href="{{ url('divisions/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">JE Name</th>
    <th scope="col">JE Mobile</th>
    <th scope="col">AE Name</th>
    <th scope="col">AE Mobile</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($divisions as $division)
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $division->id }}</a></th>
    <td>{{ $division->name }}</td>
    <td>{{ $division->jename }}</td>
    <td>{{ $division->jemobile }}</td>
    <td>{{ $division->aename }}</td>
    <td>{{ $division->aemobile }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
            </div>
            <div class="remove">
                <button class="btn btn-sm btn-primary remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
            </div>
        </div>
    </td>
    
    </tr>
         @endforeach
   
    </tbody>
    </table>
@endsection
@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection