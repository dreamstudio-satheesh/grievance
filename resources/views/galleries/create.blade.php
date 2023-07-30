@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Add Gallery  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('galleries.store') }}"  method="post" enctype="multipart/form-data">
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
                <label for="customername-field" class="form-label">Title</label>
                <input type="text" name="title"  class="form-control" placeholder="Enter Title" required="">
                <div class="invalid-feedback">Please enter Title</div>
            </div>


            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="images[]"  class="form-control" accept="image/*" multiple>
            </div>
      

         
       
        </div>
        <div class="card-footer" >
            <div class="hstack gap-2 justify-content-end">
                
                <button type="submit" class="btn btn-success"> Add Gallery</button> 
            </form>
            </div>
        </div>
    
</div>


@endsection

@section('script')
    <script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection