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
                <a href="{{ route('packages')}}" class="nav-item nav-link active">Packages</a>
                <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <a href="{{url('/')}}/register" class="btn btn-primary rounded-pill py-2 px-4">Login/Signup</a> --}}
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header2">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">"Embark on Your Ultimate Adventure with
                        Wanderlust Tour! Discover Pakistan's Cities in Style and Comfort. Book Your Journey Today!"</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <form action="{{ route('search') }}" method="GET">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                name="query" placeholder="Eg: Thailand">
                            <button type="submit"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>

        <div class="row g-4">
            @if(isset($results))
            @if($results->isEmpty())
            <div class="col-12 text-center">
                <p>No Package found.</p>
            </div>
            @else
            @foreach($results as $package)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img src="{{ URL::asset('uploads/'.$package->image) }}" alt="Image Not Available"
                            class="img-fluid" style="width:100%; height:200px; object-fit:cover;">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i>{{ $package->place }}
                        </small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt text-primary me-2"></i>{{ $package->duration }}
                            {{ $package->persons }}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                            Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{ $package->price }} Pkr</h3>
                        <p>{{ $package->description }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{url('/')}}/stripe" class="btn btn-sm px-3 border-end"><img
                                    style="width: 40px; height:30px; border:1px solid blue;" src="img/stripe.jpg"
                                    alt=""></a>
                            <a href="{{ url('/checkout', ['id' => $package->id]) }}"
                                class="btn btn-sm px-3 border-end"><img
                                    style="width: 40px; height:30px; border:1px solid blue;" src="img/jazz-cash.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @else
            @if($allPackages->isEmpty())
            <div class="col-12 text-center">
                <p>No Package found.</p>
            </div>
            @else
            @foreach($allPackages as $package)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img src="{{ URL::asset('uploads/'.$package->image) }}" alt="Image Not Available"
                            class="img-fluid" style="width:100%; height:200px; object-fit:cover;">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt text-primary me-2"></i>{{ $package->place }}
                        </small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt text-primary me-2"></i>{{ $package->duration }}
                            {{ $package->persons }}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                            Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0">{{ $package->price }} Pkr</h3>
                        <p>{{ $package->description }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{url('/')}}/stripe" class="btn btn-sm px-3 border-end"><img
                                    style="width: 40px; height:30px; border:1px solid blue;" src="img/stripe.jpg"
                                    alt=""></a>
                            <a href="{{ url('/checkout', ['id' => $package->id]) }}"
                                class="btn btn-sm px-3 border-end"><img
                                    style="width: 40px; height:30px; border:1px solid blue;" src="img/jazz-cash.jpg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endif
        </div>
    </div>
</div>
<!-- Package End -->
@endsection

@push('scripts')
<script>
// JavaScript code to show searched value in input field
document.addEventListener('DOMContentLoaded', function() {
    // Get the search query parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get('query');

    // Set the value of the input field to the search query
    const searchInput = document.querySelector('input[name="query"]');
    if (query) {
        searchInput.value = query;
    }
});
</script>
