@extends('master-layout')
@section('content')
<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h2 class="text-primary m-0">Wanderlust</h2>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index')}}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('packages')}}" class="nav-item nav-link">Packages</a>
                <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
                <a href="{{ route('weather')}}" class="nav-item nav-link">Weather</a>
            </div>
            <a href="{{ route('register')}}" class="btn btn-primary rounded-pill m-2 py-2 px-4">Admin</a>
            @if (Auth::check())
            <a href="{{ route('signout')}}" class="btn btn-danger rounded-pill py-2 px-4">Logout</a>
            @else
            <a href="{{ route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">Login / SignUp</a>
            @endif
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown"> "Embark on Your Ultimate Adventure with
                        Wanderlust Tour! Discover Pakistan's Cities in Style and Comfort. Book Your Journey Today!"
                    </p>
                    {{-- <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" id="search-input" type="text"
                            placeholder="Eg: Thailand"  onkeyup="filterItems()">
                        <button type="button"
                            class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                            style="margin-top: 7px;">Search</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3 heading" >About Us</h6>
                            <h1 class="mb-4">Welcome to <span class="text-primary">Wanderlust Travel</span></h1>
                            <p class="mb-4">
                                <strong> Discover Pakistan's Cities with Tourist! </strong> Explore the vibrant
                                streets and cultural treasures of Pakistan with ease. From rich history to culinary
                                delights, our tours offer unforgettable experiences. Travel comfortably, book online
                                effortlessly, and explore worry-free with our safety measures in place.


                            </p>
                            <p class="mb-4">

                                Join us and uncover the beauty of Pakistan's cities today! Also, experience hidden
                                gems like serene parks, bustling bazaars, majestic mosques, lively festivals,
                                authentic local cuisine, and immersive cultural experiences.

                            </p>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Comfortable
                                        Transportation </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Convenient
                                        Online Booking </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Expert
                                        Guides </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Hotels &
                                        Resturents </p>
                                </div>

                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Safety
                                        Measures</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Customized
                                        Itineraries </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i> Weather
                                        updates & Enquiries </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2" id="heading" ></i>24/7 Service
                                    </p>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3 heading">Services</h6>
            <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5> City and Destination Guides </h5>
                        <p>
                            Comprehensive guides detailing the top cities and tourist destinations in Pakistan.
                            Detailed information on attractions, landmarks, cultural sites, and local activities.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>Hotel Reservation</h5>
                        <p>
                            Partnerships with a network of hotels and restaurants in key tourist areas.
                            Seamless online booking process for accommodations, with secure payment gateways.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Tailored Travel Packages
                        </h5>
                        <p>

                            Customized travel packages designed to suit different interests, budgets, and durations.
                            Easy-to-use online booking platform allowing customers to select, and pay for
                            their desired packages.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Real-Time Updates and Discounts:</h5>
                        <p>
                            Regular updates on upcoming travel shows, events, and festivals across Pakistan.
                            Special discounts and promotional offers available exclusively for online bookings.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Safe and Secure Booking Platform
                        </h5>
                        <p>
                            Secure online booking platform with robust encryption to protect customer information
                            and transactions. Variety of payment options including credit/debit cards, online
                            banking, and mobile
                            wallets.


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>24/7 Customer Support</h5>
                        <p>
                            Dedicated customer support team available round the clock via phone, email, and live
                            chat.
                            Prompt assistance with online booking inquiries or queries.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Travel Resources and Tips:
                        </h5>
                        <p>
                            Access to valuable travel resources including packing guides, visa information, and
                            local customs.
                            Insider tips and recommendations from seasoned travelers to enhance the overall
                            experience.


                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5 class="heading" >Transportation Solutions
                        </h5>
                        <p>
                            Extensive fleet of comfortable buses and reliable cars for transportation across
                            Pakistan. Convenient online booking system with secure payment options.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Destination Start -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3 heading">Destination</h6>
            <h1 class="mb-5">Popular Destination</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/destination-1.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                30% OFF</div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Islamabad</div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/destination-2.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                25% OFF</div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Naran Kaghan </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="img/destination-3.jpg" alt="">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                35% OFF</div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                Kashmir Point</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/destination-4.jpg" alt=""
                        style="object-fit: cover;">
                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                    </div>
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                        Nathiagali</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Destination Start -->




<!-- HTML content for transport section -->
<div class="transport-container">

    <!-- Transport Card 1 -->
    <div class="transport-card">
        <img src="img/tourbus-3.PNG" alt="Bus">
        <h3>Comfortable Buses</h3>
        <p>Enjoy a comfortable journey in our spacious buses equipped with modern amenities.</p>
    </div>

    <!-- Transport Card 2 -->
    <div class="transport-card">
        <img src="img/tour-bus2.jpg" alt="Car">
        <h3>Reliable Cars</h3>
        <p>Travel hassle-free in our reliable cars with experienced drivers.</p>
    </div>

    <div class="transport-card">
        <img src="img/tour-bus3.jpg" alt="Bus">
        <h3>Comfortable Buses</h3>
        <p>Enjoy a comfortable journey in our spacious buses equipped with modern amenities.</p>
    </div>

</div>


<!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <h4 class="mb-4 text-white">
                        Welcome to our user-friendly online booking platform!
                    </h4>
                    <p class="mb-4">
                        Easily reserve your next adventure by providing your personal information and selecting your
                        desired tour package. Specify accommodation preferences and optional services, then proceed
                        to secure payment. Review our Terms and Conditions before submitting your booking request.
                        Once confirmed, expect a detailed email with payment instructions. Thank you for choosing us
                        for your travel needs! </p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Book A Tour</h1>
                    <form method="post" action="{{ route('bookings.save') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" name="name"
                                        placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" name="email"
                                        placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="datetime-local"
                                        class="form-control bg-transparent datetimepicker-input" id="datetime"
                                        placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker"
                                        name="datetime" />
                                    <label for="datetime">Date & Time</label>
                                    @error('datetime')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent" id="destination" name="destination">
                                        <option value="" selected disabled>Select Destination</option>
                                        <option value="Swat">Swat</option>
                                        <option value="Hunza">Hunza</option>
                                        <option value="Skardu">Skardu</option>
                                    </select>
                                    <label for="destination">Destination</label>
                                    @error('destination')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" id="details" name="details"
                                        placeholder="Special Request" style="height: 100px"></textarea>
                                    <label for="details">Details</label>
                                    @error('details')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-light w-100 py-3">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Start -->


<!-- Process Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3 heading">Process</h6>
            <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                        style="width: 100px; height: 100px;">
                        <i class="fa fa-map fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Choose A Destination</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">
                        Browse and select from our diverse range of destinations across Pakistan.
                        Explore highlights and descriptions to find your perfect travel match.` </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                        style="width: 100px; height: 100px;">
                        <i class="fa fa-money-check fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Pay Online</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">
                        Conveniently pay online using secure methods like cards and bank transfers.
                        Enjoy instant confirmation of your booking for peace of mind. </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                        style="width: 100px; height: 100px;">
                        <i class="fa fa-bus fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Plan Tour Today
                    </h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">
                        Start planning your dream tour today with our easy online booking.
                        Get assistance from our team to tailor your itinerary to perfection. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Start -->


<!-- Team Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Muhammad Ahmad </h5>
                            <small>Php developer, Full stack devloper, Wordpress developer, Graduate in Computer
                                Science, Manager </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rahat Naseer</h5>
                            <small>Php developer, Graphics designer Content writer , Graduate in Computer Science,
                                Manager</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team.png" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rimsha Khan</h5>
                            <small>Web developer, Content writer expert, Graduate in Computer Science, Manager</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3 heading">Testimonial</h6>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Muhammad Rashid</h5>
                <p>Islamabad, Pak</p>
                <p class="mb-0">"Booking with Wanderlust Tour Planner was seamless, and the adventure exceeded
                    expectations. Can't wait for the next trip!"

                </p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Muhammad Faisal</h5>
                <p>Lahore, Pak</p>
                <p class="mt-2 mb-0">"Wanderlust Tour Planner delivered unforgettable memories and genuine
                    hospitality. An exceptional travel experience!"</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Muhammad Adnan</h5>
                <p>Faisalabad, Pak</p>
                <p class="mt-2 mb-0">"Efficient planning and expert guidance made my trip with Wanderlust Tour
                    Planner unforgettable. Highly recommended!"





                </p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg"
                    style="width: 80px; height: 80px;">
                <h5 class="mb-0">Muhammad Qasim</h5>
                <p>Faisalabad, Pak</p>

                <p class="mt-2 mb-0">"Effortless planning, expert guidance, unforgettable memories Wanderlust
                    Planner delivered an incredible journey. Highly recommended!"






                </p>
            </div>
        </div>
    </div>
</div>
@endsection
