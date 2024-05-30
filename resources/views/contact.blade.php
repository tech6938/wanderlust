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
                <a href="{{ route('index')}}" class="nav-item nav-link">Home</a>
                <a href="{{ route('packages')}}" class="nav-item nav-link">Packages</a>
                <a href="{{ route('contact')}}" class="nav-item nav-link active">Contact</a>
            </div>
            {{-- <a href="{{url('/')}}/register" class="btn btn-primary rounded-pill py-2 px-4">Register</a> --}}
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header3">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown"> "Embark on Your Ultimate Adventure with
                        Wanderlust Tour! Discover Pakistan's Cities in Style and Comfort. Book Your Journey Today!"
                    </p>
                    {{-- <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Eg: Thailand">
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
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
            <h1 class="mb-5">Contact For Any Query</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h5>Get In Touch</h5>
                <p class="mb-4">Have questions or need assistance? Reach out to our friendly team!</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Office</h5>
                        <p class="mb-0">Jhung bazar near Dhobi ghat, Faisalabad, PAK</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Mobile</h5>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary"
                        style="width: 50px; height: 50px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="text-primary">Email</h5>
                        <p class="mb-0">ahmadsaleem6875@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <iframe class="position-relative rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form action="{{route('contact.form')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- team start-->
<div class="responsive-container-block container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Team</h6>
        <h1 class="mb-5">Meet Our Team</h1>
    </div>
    <div class="responsive-container-block">
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="img/team.png">
                </div>
                <p class="text-blk name">
                    Rahat Naseer
                </p>
                <p class="text-blk position">
                    Front-End Developer
                </p>
                <p class="text-blk feature-text">
                    Content Writer and Graphics Designer
                </p>
                <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="img/team.png">
                </div>
                <p class="text-blk name">
                    Rimsha Ashraf
                </p>
                <p class="text-blk position">
                    Front-End Developer
                </p>
                <p class="text-blk feature-text">
                    Content Writer and Web Designer
                </p>
                <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>
        <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 card-container">
            <div class="card">
                <div class="team-image-wrapper">
                    <img class="team-member-image" src="img/team.png">
                </div>
                <p class="text-blk name">
                    Ahmad Saleem
                </p>
                <p class="text-blk position">
                    Backend Developer
                </p>
                <p class="text-blk feature-text">
                    Web Developer
                </p>
                <div class="social-icons">
                    <a href="https://www.twitter.com" target="_blank">
                        <img class="twitter-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon.svg">
                    </a>
                    <a href="https://www.facebook.com" target="_blank">
                        <img class="facebook-icon"
                            src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Icon-1.svg">
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--team end-->

@endsection
