@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Galleries  @endslot
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
                <a href="{{ url('/admin/galleries/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Title</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $gallery)
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $gallery->id }}</a></th>
    <td>{{ $gallery->title }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <a href="{{ url("/admin/galleries/" ) }}/{{ $gallery->id }}" class="btn btn-sm btn-success edit-item-btn" >Manage</a>
            </div>
            <div class="remove">
                <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST"> 
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