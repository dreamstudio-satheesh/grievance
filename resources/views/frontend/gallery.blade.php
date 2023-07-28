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
                        <li data-filter=".cate-1">Christmas</li>
                        <li data-filter=".cate-2">Corpus Christi</li>
                        <li data-filter=".cate-3">Holy Innocents</li>
                        <li data-filter=".cate-4">Lammas</li>
                    </ul>
                </div>
                <div class="row g-3 grid">
                    <div class="col-lg-3 col-sm-6 col-12 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/01.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/01.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/02.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/02.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/03.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/03.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-4 cate-1">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/04.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/04.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/05.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/05.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-2 cate-4">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/06.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/06.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-1 cate-3">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/07.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/07.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 cate-2">
                        <div class="gallery__item">
                            <div class="gallery__inner">
                                <div class="gallery__thumb">
                                    <img src="assets/images/gallery/home-2/08.jpg" alt="gallery-thumb" class="w-100">
                                </div>
                                <div class="gallery__content text-center">
                                    <a href="assets/images/gallery/home-2/08.jpg" data-rel="lightcase" class="gallery__icon"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> gallery section end here <================== -->

@endsection