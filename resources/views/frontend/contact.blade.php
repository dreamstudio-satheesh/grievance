@extends('frontend.layouts')
@section('title') Clean Salem @endsection
@section('content')


    
    <!-- ================> Contact section start here <================== -->
    <div class="contact padding--top padding--bottom bg-light">
        <div class="container">
            <div class="section__header text-center">
                @if($message = Session::get('success'))
                <h2>{{ $message }}</h2>                    
                @else                    
                <h2>Contact Us</h2>
                @endif                
            </div>
            <div class="section__wrapper">
                <div class="contact__form">
                    <form class="d-flex flex-wrap justify-content-between" action="{{ url('contact.php')}}" id="contact-form" method="POST">
                        @csrf
                        <input type="text" placeholder="Your Name" id="name" name="name" required="required">
                        <input type="text" placeholder="Your Email" id="email" name="email" required>
                        <input class="w-100" type="text" placeholder="Subject" id="subject" name="subject" required>
                        <textarea placeholder="Your Message" rows="8" name="message" id="message" required></textarea>
                        <div class="text-center w-100">
                            <button type="submit" class="default-btn move-right"><span>SEND NOW</span></button>
                        </div>
                    </form>
                    <p class="form-message"></p> 
                </div> 
            </div>
        </div>
    </div>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> Location section start here <================== -->
    <div class="location">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-6 col-12">
                    <div class="location__left">
                        <div class="location__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15629.091119018547!2d78.1079224619453!3d11.675070080384025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf070f25d604d%3A0x90d4ef7a65c5c4ab!2sSuramangalam%2C%20Salem%2C%20Tamil%20Nadu%20636005!5e0!3m2!1sen!2sin!4v1690387005987!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="location__right padding--top padding--bottom">
                        <div class="location__info">
                            <div class="location__info-top">
                                <div class="section__header">
                                    <h2>Contact Person</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-thumb">
                                        <img src="assets/images/location/01.png" alt="location thumb" width="100px">
                                    </div>
                                    <div class="location__info-content">
                                        <h6>Support team</h6>
                                        
                                        <ul>
                                            <li><b>Tel:</b>+91 90000 00000</li>
                                            <li><b>Email:</b>info@cleansalem.org</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="location__info-bottom">
                                <div class="section__header">
                                    <h2>Contact Info</h2>
                                </div>
                                <div class="section__wrapper">
                                    <div class="location__info-list">
                                        <ul>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <p>Suramangalam, Salem, Tamil Nadu</p>
                                                </div> 
                                            </li>
                                            <li>
                                                <div class="location__info-left">
                                                    <i class="far fa-clock"></i>
                                                </div> 
                                                <div class="location__info-right">
                                                    <ul>
                                                        <li><b>Monday-Saturday :</b> 06:00 am - 09:00 pm</li>
                                                        
                                                        <li><b>Sunday :</b> Closed</li>
                                                    </ul>
                                                </div> 
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
    </div>
    <!-- ================> Location section end here <================== -->



@endsection