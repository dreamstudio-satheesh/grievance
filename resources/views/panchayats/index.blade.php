@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Panchayats  @endslot
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
                <a href="{{ url('/admin/panchayats/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">president Name</th>
    <th scope="col">president Mobile</th>
    <th scope="col">Vicepresident Name</th>
    <th scope="col">Vicepresident Mobile</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($panchayats as $panchayat)
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $panchayat->id }}</a></th>
    <td>{{ $panchayat->name }}</td>
    <td>{{ $panchayat->pname }}</td>
    <td>{{ $panchayat->pmobile }}</td>
    <td>{{ $panchayat->vname }}</td>
    <td>{{ $panchayat->vmobile }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <button type="button" class="btn btn-success custom-toggle" data-bs-toggle="button">
                    <span class="icon-on"><i class="ri-thumb-up-line align-bottom me-1"></i> Active</span>
                    <span class="icon-off"><i class="ri-thumb-down-line align-bottom me-1"></i> Inactive</span>
                </button>
            </div>
            <div class="remove">
                <form action="{{ route('panchayats.destroy',$panchayat->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-primary remove-item-btn">Remove</button>
                </form> 
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