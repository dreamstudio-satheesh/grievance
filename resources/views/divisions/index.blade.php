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
                <a href="{{ url('/admin/divisions/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
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
                <div class="form-check form-switch form-switch-success">
                    <form action="{{ route('divisions.update',$division->id) }}" method="POST"> 
                        @csrf
                        @method('PUT')
                        <input name="status" class="form-check-input" type="checkbox" role="switch" id="SwitchCheck3"  {{  ($division->status == 1 ? ' checked' : '') }} onChange="this.form.submit()">
                    </form>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                
            </div>
            <div class="remove">
               {{--  <form action="{{ route('divisions.destroy',$division->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-light btn-sm"><i class="ri-delete-bin-5-line"></i>Delete</button>
                </form>  --}}

                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
            </div>
        </div>
    </td>
    
    </tr>
         @endforeach
   
    </tbody>
    </table>
@endsection
@section('script')
<script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection