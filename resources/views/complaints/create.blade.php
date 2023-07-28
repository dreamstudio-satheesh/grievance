@extends('layouts.livemaster')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Grievances @endslot
@slot('title') Register Grievances  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('complaints.store') }}"  method="post" >
        @csrf
        <div class="card-body">

            @livewire('show-city-town')
            

           
            
           

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
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection