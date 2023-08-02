@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')


     <!-- ================> Banner section start here <================== -->
     <div class="banner__slider banner-style3 overflow-hidden">

        <div class="swiper-wrapper">
        @foreach ($banners as $banner)
            <div class="swiper-slide">
                <div class="banner" style="background-image: url({{ $banner->getFirstMediaUrl('images') }});">
                    <div class="container">
                        <div class="banner__content ms-lg-auto">
                            <h2 class="text-white">{{ $banner->title}}</h2>
                            <p class="text-white">{{ $banner->description}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
            
        
    </div>
    <!-- ================> Banner section end here <================== -->

<!-- ================> Service section start here <================== -->
<div class="service padding--top padding--bottom">
    <div class="container">
        <div class="section__header text-center">
            <h2 align="center">Requirements &amp; complaints</h2>
            <p>Whatever the problem, we will try our best, we will try as much as we can. Let's win.</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4 align-items-center">
                <div class="col-lg-3 col-12">
                    <div class="service__left">
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="fas fa-road"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Road Damage</h5>
                                    <p>Complaining about the bad condition of roads in your area</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="fas fa-water"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Water Problem</h5>
                                    <p>Complaints regarding drinking water can be reported to the Panchayats at the District level</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="far fa-brush"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Drainage</h5>
                                    <p>complaints regarding water supply, sewer and storm water disposal 24X7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="service__center">
                        <div class="service__text">
                            <p>WHAT</p>
                            <h3>Need</h3>
                            <h6>WE PROVID</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="service__right">
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="fas fa-trash"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Waste Cleaning &amp; Solid Waste</h5>
                                    <p>Collection/removal of Garbage on receipt of Complaint on non lifting, Within 24 hours on receipt of the complaint</p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="fas fa-cloud-rain"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Rain Water</h5>
                                    <p>Complaining about the Rainwater leaking from the Road, Street </p>
                                </div>
                            </div>
                        </div>
                        <div class="service__item">
                            <div class="service__inner">
                                <div class="service__icon">
                                    <i class="fas fa-bus"></i>
                                </div>
                                <div class="service__content">
                                    <h5>Transportation Problem</h5>
                                    <p>Complaining about Public transportation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ================> Service section end here <================== -->


<!-- ================> gallery section start here <================== -->

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
<!-- ================> gallery section end here <================== -->


<!-- ================> Event section start here <================== -->
<div class="event padding--top padding--bottom bg-light">
    <div class="container">
        <div class="section__header text-center">
            <h2>Recent News &amp; Event</h2>
            <p>Enthusiastically underwhelm quality benefits rather than professional outside the box thinking. Distinctively network highly efficient leadership skills</p>
        </div>
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">

                @foreach ($newsevents as $events)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="event__item">
                        <div class="event__inner">
                            <div class="event__thumb">
                                <a href="{{ url('event-single') }}/{{ $events->id }}"><img src="{{ $events->getFirstMediaUrl('images') }}" alt="event thumb"></a>
                                <div class="event__thumb-date">
                                    <h6>{{ \Carbon\Carbon::parse($events->date)->format('F') }}</h6>
                                    <p>{{ \Carbon\Carbon::parse($events->date)->format('d') }}</p>
                                </div>
                            </div>
                            <div class="event__content">
                                <a href="event-single.php"><h5>{{ $events->titile }}</h5></a>
                                <div class="event__metapost">
                                    <ul class="event__metapost-info">
                                        <li><i class="far fa-clock"></i>{{$events->date }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i> {{$events->location }}</li>
                                    </ul>
                                    <ul class="event__metapost-comentshare">
                                        
                                        <li class="event__metapost-share">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$events->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
               
             
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- ================> Event section end here <================== -->





<!-- ================> Cause section start here <================== -->
<div class="cause padding--top padding--bottom bg-img" style="background: url(assets/images/bg-img/08.jpg) rgba(0,0,0,.4);">
    <div class="container">
       
        <div class="section__wrapper">
            <div class="cause__top row justify-content-center g-4 row-cols-xl-5 row-cols-md-3 row-cols-sm-2 row-cols-1">
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>2893</h3>
                            <h6>Total Complaints</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>2850</h3>
                            <h6>Finished complaints</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>43</h3>
                            <h6>Processing Complaints</h6>
                        </div>
                    </div>
                </div>
                <div class="cause__item">
                    <div class="cause__inner">
                        <div class="cause__content">
                            <h3>460</h3>
                            <h6>Total Events</h6>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div>
<!-- ================> Cause section end here <================== -->


@endsection