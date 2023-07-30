@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@section('css')
    <link href="{{ URL::asset('admin_assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add News & Events  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('news_events.store') }}"  method="POST" enctype="multipart/form-data" >
        @csrf
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
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter Title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Add Image</label>
                <input type="file" name="photo"  class="form-control" accept="image/*" >
            </div>

           

            <div class="mb-3">
                <label for="location"  class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" placeholder="Enter Location">
            </div>
           
            <div class="mb-3">
                <label for="description"  class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            

        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add News & Events</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection
@section('script')
    <script src="{{ URL::asset('admin_assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('admin_assets/js/pages/form-file-upload.init.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection
