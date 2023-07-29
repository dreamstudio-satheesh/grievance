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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Photos</h4>
                        </div><!-- end card header -->
        
                        <div class="card-body">
                            <p class="text-muted">Upload Your News images & Photos Here</p>
        
                            <div class="dropzone">
                                <div class="fallback">
                                    <input name="photo" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                    </div>
        
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </div>
        
                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                <li class="mt-2" id="dropzone-preview-list">
                                    <!-- This is used as the file preview template -->
                                    <div class="border rounded">
                                        <div class="d-flex p-2">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-sm bg-light rounded">
                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="{{URL::asset('admin_assets/images/new-document.png')}}"
                                                        alt="Dropzone-Image" />
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="pt-1">
                                                    <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                    <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 ms-3">
                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- end dropzon-preview -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
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
