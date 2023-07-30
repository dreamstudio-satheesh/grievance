@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Complaints  @endslot
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
                <a href="{{ url('/admin/complaints/create') }}" class="btn btn-primary add-btn"><i class="ri-add-line align-bottom me-1"></i> Add </a>
            </div>
          
        </div>
    </div>
</div>

<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Complaint NO</th>
    <th scope="col">Name</th>
    <th scope="col">Mobile</th>
    <th scope="col">Type</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
    <th scope="col">Forward</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($complaints as $complaint)
    <tr>
    <th scope="row">{{ $complaint->id }}</th>
    <th>#{{ $complaint->complaint_id }}</th>
    <td>{{ $complaint->username }}</td>
    <td>{{ $complaint->mobile }}</td>
    <td>{{ $complaint->subject }}</td>
    <td>{{ $complaint->status }}</td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <button class="btn btn-sm btn-success edit-item-btn">Manage</button>
            </div>
            <div class="remove">
                <form action="{{ route('complaints.destroy',$complaint->id) }}" method="POST"> 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-primary remove-item-btn">Remove</button>
                </form>                 
            </div>
        </div>
    </td>
    <td>
      
        <div class="d-flex gap-2">
            <div class="edit">
                <a href="https://wa.me/6379108040?text={{ urlencode($complaint->subject.'
                    '.'name :'. $complaint->username) }}" class="btn" > <i class="bx bxl-whatsapp" style="size=24px;  color:green"></i> Je</a>
            </div>
            <div class="remove">
                <a href="https://wa.me/6379108040?text={{ urlencode($complaint->subject.'
                    '.'name :'. $complaint->username) }}" class="btn" > <i class="bx bxl-whatsapp" style="size=24px; color:green"></i> Ae</a>
           
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