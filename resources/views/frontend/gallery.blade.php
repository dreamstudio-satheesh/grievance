@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')


    <!-- ================> gallery section start here <================== -->
    <div class="gallery padding--top padding--bottom bg-light">
        <div class="container-fluid">
            <div class="section__header text-center">
                <h2>Photos Gallery</h2>
                <p>Helping you remember your special day</p>
            </div>
            <div class="section__wrapper">
                <div class="gallery__filter">                    
                    <ul>
                        <li data-filter="*" class="active">All</li>
                        @foreach ($galleries as $gallery)
                        <li data-filter=".cate-{{ $gallery->id }}">{{ $gallery->title  }}</li>
                        @endforeach
                        
                    </ul>
                </div>

                <div class="row g-3 grid">
                    @foreach ($galleries as $gallery)
                        @foreach ($gallery->getMedia('images') as $image)
                        
                            <div class="col-lg-3 col-sm-6 col-12 cate-2 cate-{{ $gallery->id }}">
                                <div class="gallery__item">
                                    <div class="gallery__inner">
                                        <div class="gallery__thumb">
                                            <img src="{{ asset($image->getUrl('thumb')) }}" alt="gallery-thumb" class="w-100">
                                        </div>
                                        <div class="gallery__content text-center">
                                            <a href="{{ asset($image->getUrl()) }}" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        
                        @endforeach                        
                    @endforeach
                </div>                
            </div>
        </div>
    </div>
    <!-- ================> gallery section end here <================== -->

@endsection