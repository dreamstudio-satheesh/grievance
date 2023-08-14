@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Enquiry  @endslot
@endcomponent

<div class="row g-4 mb-3">
    <div class="col-sm-auto">
    </div>
</div>
<table class="table table-nowrap">
    <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">subject</th>
    <th scope="col">Message</th>
    <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($enquirylist as $item )
    <tr>
    <th scope="row"><a href="#" class="fw-semibold">#{{ $item->id }}</a></th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->subject }}</td>
    <td>{{ $item->message }}</td>
    <td>
        <div class="d-flex gap-2">
            
            <div class="remove">
                <form action="{{ route('enquiry.destroy',$item->id) }}" method="POST"> 
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