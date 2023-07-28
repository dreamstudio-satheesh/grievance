@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')


     <!-- ================> Banner section start here <================== -->
     <div class="banner__slider banner-style3 overflow-hidden">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/banner/01.jpg);">
                    <div class="container">
                        <div class="banner__content ms-lg-auto">
                            <h2 class="text-white">Title 1</h2>
                            <p class="text-white">Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/banner/02.jpg);">
                    <div class="container">
                        <div class="banner__content ms-lg-auto">
                            <h2>Title 2</h2>
                            <p>Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner" style="background-image: url(assets/images/banner/03.jpg);">
                    <div class="container">
                        <div class="banner__content m-lg-auto text-lg-center">
                            <h2 class="text-white">Title 3</h2>
                            <p class="text-white">Enthusiastically underwhelm quality benefits rather than professional "outside the box" thinking. Distinctively network highly efficient leadership skills</p>
                            
                        </div>
                    </div>
                </div>
            </div>
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
<div class="gallery padding--top padding--bottom bg-light">
    <div class="container-fluid">
        <div class="section__header text-center">
            <h2>Photos Gallery</h2>
        </div>
        <div class="section__wrapper">
            <div class="gallery__filter">
                <ul>
                    <li data-filter="*" class="active">All</li>
                    <li data-filter=".cate-1">Public Grievance</li>
                    <li data-filter=".cate-2">Meeting</li>
                    <li data-filter=".cate-3">Events</li>
                    <li data-filter=".cate-4">Others</li>
                </ul>
            </div>
            <div class="row g-0 grid">
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-1">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/01.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/01.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/02.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/02.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/03.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/03.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-4 cate-1">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/04.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/04.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/05.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/05.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2 cate-4">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/06.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/06.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-1 cate-3">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/07.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/07.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/08.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/08.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-1">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/09.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/09.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-4">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/10.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/10.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-2">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/11.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/11.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-sm-6 col-12 cate-3">
                    <div class="gallery__item">
                        <div class="gallery__inner">
                            <div class="gallery__thumb">
                                <img src="assets/images/gallery/home-3/12.jpg" alt="gallery-thumb" class="w-100">
                            </div>
                            <div class="gallery__content text-center">
                                <a href="assets/images/gallery/home-3/12.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="default-btn move-right"><span>View All</span></a>
            </div>
        </div>
    </div>
</div>
<!-- ================> gallery section end here <================== -->


<!-- ================> Event section start here <================== -->
<div class="event padding--top padding--bottom">
    <div class="container">
        <div class="section__header text-center">
            <h2>Recent News &amp; Event</h2>
            
        </div>
        <div class="section__wrapper">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="event__item">
                        <div class="event__inner">
                            <div class="event__thumb">
                                <a href="event-single.html"><img src="assets/images/event/07.jpg" alt="event thumb"></a>
                                <div class="event__thumb-date">
                                    <h6>09</h6>
                                    <p>Nov</p>
                                </div>
                            </div>
                            <div class="event__content">
                                <a href="event-single.html"><h5>Open Rededication</h5></a>
                                <div class="event__metapost">
                                    <ul class="event__metapost-info">
                                        <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
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
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="event__item">
                        <div class="event__inner">
                            <div class="event__thumb">
                                <a href="event-single.html"><img src="assets/images/event/08.jpg" alt="event thumb"></a>
                                <div class="event__thumb-date">
                                    <h6>09</h6>
                                    <p>Nov</p>
                                </div>
                            </div>
                            <div class="event__content">
                                <a href="event-single.html"><h5>Big Event This Year</h5></a>
                                <div class="event__metapost">
                                    <ul class="event__metapost-info">
                                        <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="event__item">
                        <div class="event__inner">
                            <div class="event__thumb">
                                <a href="event-single.html"><img src="assets/images/event/09.jpg" alt="event thumb"></a>
                                <div class="event__thumb-date">
                                    <h6>09</h6>
                                    <p>Nov</p>
                                </div>
                            </div>
                            <div class="event__content">
                                <a href="event-single.html"><h5>Church Evert</h5></a>
                                <div class="event__metapost">
                                    <ul class="event__metapost-info">
                                        <li><i class="far fa-clock"></i> 10am - 12pm</li>
                                        <li><i class="fas fa-map-marker-alt"></i> PO Box 16122, Collins Street</li>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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