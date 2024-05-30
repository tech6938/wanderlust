<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <div class="nav-option option2">
                <i class="fa-solid fa-house"></i>
                <h3> Dashboard</h3>
            </div>


            <div class="nav-option option4">
                <i class="fa-solid fa-ticket"></i>
                <h3>Manual <br> Bookings</h3>
            </div>


            <div class="nav-option option5">
                <i class="fa-solid fa-box"></i>
                <h3> Packages</h3>
            </div>

            <div class="nav-option option6">
                <i class="fa-solid fa-ticket"></i>
                <h3>Package <br> Booking</h3>
            </div>

            <div class="nav-option option7">
                <i class="fa-solid fa-shop"></i>
                <h3> Orders List</h3>
            </div>



            <div class="nav-option logout">
                <a href="{{ route('signout') }}" class="nav-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3 style="margin-left:20px;">Logout</h3>
                </a>
            </div>


        </div>
    </nav>
</div>

<script>
$(document).ready(function() {
    $('.option2').click(function() {
        window.location.href = "{{ url('/dashboard') }}";
    });

    $('.option4').click(function() {
        window.location.href = "{{ url('/booking') }}";
    });
    $('.option5').click(function() {
        window.location.href = "{{ url('/packege_upload') }}";
    });
    $('.option6').click(function() {
        window.location.href = "{{ url('/package_bookings') }}";
    });
    $('.option7').click(function() {
        window.location.href = "{{ url('/OrdersList') }}";
    });


    if ("{{ url()->current() }}" === "{{ url('/dashboard') }}") {
        $('.option2').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/booking') }}") {
        $('.option4').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/packege_upload') }}") {
        $('.option5').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/package_bookings') }}") {
        $('.option6').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/OrdersList') }}") {
        $('.option7').addClass('active');
    }
});
</script>
