@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')

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


@endsection