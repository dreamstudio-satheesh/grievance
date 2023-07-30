@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')

    <!-- ================> Event section start here <================== -->
    <div class="event event-single padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="event__item">
                            <div class="event__inner">
                                <div class="event__content pt-0">
                                    <h3>{{ $newsevent->title }}</h3>
                                    <div class="event__metapost">
                                        <ul class="event__metapost-info">
                                            <li><i class="far fa-clock"></i>{{$events->date }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i> {{ $newsevent->location }}</li>
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
                                    <div class="event__thumb mb-3">
                                        <img src="{{ $newsevent->getFirstMediaUrl('images') }}" alt="event thumb">
                                        <div class="event__thumb-date">
                                            <h6>{{ \Carbon\Carbon::parse($newsevent->date)->format('F') }}</h6>
                                        <p>{{ \Carbon\Carbon::parse($newsevent->date)->format('d') }}</p>
                                        </div>
                                    </div>
                                    
                                    <p>{{ $newsevent->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                           
                            <div class="sidebar__info">
                                <div class="section__header">
                                    <h2>Event Details</h2>
                                </div>
                                <div class="section__wrapper">
                                    <ul class="sidebar__info-list mb-3">
                                        <li>
                                            <div class="sidebar__info-left"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="sidebar__info-right">PO Box 16122, Collins Street West Victoria, 8007 Australia</div>
                                        </li>
                                        <li>
                                            <div class="sidebar__info-left"><i class="far fa-calendar-alt"></i></div>
                                            <div class="sidebar__info-right">09 November, 2022</div>
                                        </li>
                                        <li>
                                            <div class="sidebar__info-left"><i class="far fa-clock"></i></div>
                                            <div class="sidebar__info-right">11. 00 AM</div>
                                        </li>
                                        <li>
                                            <div class="sidebar__info-left"><i class="fas fa-envelope"></i></div>
                                            <div class="sidebar__info-right">info@yourmail.com</div>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Event section end here <================== -->


@endsection