@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Wards  @endslot
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
                <a href="{{ url('/admin/wards/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Ward No</th>
    <th scope="col">Panchayat name</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($wards as $ward)
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $ward->id }}</a></th>
    <td>{{ $ward->name }}</td>
    <td>{{ $ward->panchayat->name }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <a href="{{ route('wards.edit',$ward->id) }}" class="btn btn-sm btn-light edit-item-btn">Edit</a>
            </div>
            <div class="remove">
               {{--  <form action="{{ route('wards.destroy',$ward->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-primary remove-item-btn">Remove</button>
                </form>  --}}
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