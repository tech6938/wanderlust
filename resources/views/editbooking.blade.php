<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/dashboard.css')}}">
    <script src="https://kit.fontawesome.com/0cc3274485.js" crossorigin="anonymous"></script>
    <!-- for datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Logo Here</div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>
        <!--
		<div class="searchbar"> 
			<input type="text"
				placeholder="Search"> 
			<div class="searchbtn"> 
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
					class="icn srchicn"
					alt="search-icon"> 
			</div> 
		</div> 
-->
        <div class="message">
            <!--
			<div class="circle"></div> 
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
				class="icn"
				alt=""> 

			<div class="dp"> 
			<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp"> 
			</div> -->
            <div class="dropdown">
                <div class="dp">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                        class="dpicn" alt="dp">
                    <div class="dropdown-content">
                        <a href="{{ route('signout') }}">Logout</a>
                    </div>
                </div>
            </div>

        </div>

    </header>

    <div class="main-container">
        @include('navbar')
        <div class="main">

            <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Search">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" alt="search-button">
                </div>
            </div>

            <!--
			<div class="box-container"> 

				<div class="box box1"> 
					<div class="text"> 
						<h2 class="topic-heading">60.5k</h2> 
						<h2 class="topic">Article Views</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
						alt="Views"> 
				</div> 

				<div class="box box2"> 
					<div class="text"> 
						<h2 class="topic-heading">150</h2> 
						<h2 class="topic">Likes</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
						alt="likes"> 
				</div> 

				<div class="box box3"> 
					<div class="text"> 
						<h2 class="topic-heading">320</h2> 
						<h2 class="topic">Comments</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
						alt="comments"> 
				</div> 

				<div class="box box4"> 
					<div class="text"> 
						<h2 class="topic-heading">70</h2> 
						<h2 class="topic">Published</h2> 
					</div> 

					<img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
				</div> 

			</div> 
-->

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Edit Booking</h1>
                    <button class="view" onclick="window.location.href='{{ route('dashboard') }}'">View All</button>
                </div>
                <div class="report-body">
                    <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $booking->name }}">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $booking->email }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Date & Time:</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime"
                                value="{{ $booking->datetime }}" required>
                            @error('datetime')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="destination">Destination:</label>
                            <select class="form-control" id="destination" name="destination">
                                <option value="Swat" {{ $booking->destination == 'Swat' ? 'selected' : '' }}>Swat
                                </option>
                                <option value="Skardu" {{ $booking->destination == 'Skardu' ? 'selected' : '' }}>Skardu
                                </option>
                                <option value="Hunza" {{ $booking->destination == 'Hunza' ? 'selected' : '' }}>Hunza
                                </option>
                            </select>
                            @error('destination')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="details">Details:</label>
                            <textarea class="form-control" id="details"
                                name="details">{{ $booking->details }}</textarea>
                            @error('datils')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Confirmed" {{ $booking->status == 'Confirmed' ? 'selected' : '' }}>
                                    Confirmed</option>
                                <option value="Pending" {{ $booking->status == 'Pending' ? 'selected' : '' }}>Pending
                                </option>
                            </select>
                            @error('status')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="submit-btn">Update Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/index.js')}}"></script>
</body>

</html>