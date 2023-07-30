@extends('layouts.master')
@section('title') @lang('translation.dashboards') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') show Gallery  @endslot
@endcomponent


    <div class="card">
    <form action="{{ route('galleries.update', $gallery->id) }}"  method="post" enctype="multipart/form-data">
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
   
                <input type="hidden" name="id"  value="{{ $gallery->id }}">


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

    <div class="card">

        <div class="card-body">
            <div class="live-preview">

                <div class="row align-items-center">
                    @foreach ($gallery->getMedia('images') as $image)
                    <div class="col-33">
                        <img class="rounded" alt="200x200" width="300" src="{{ asset($image->getUrl()) }}" data-holder-rendered="true">
                    </div><!-- end col -->
                    @endforeach
                </div>

            </div>
           
        </div>

    </div>


@endsection

@section('script')
    <script src="{{ URL::asset('/admin_assets/js/app.min.js') }}"></script>
@endsection