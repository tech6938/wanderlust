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
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="report-header">
                    <h1 class="recent-Articles">Bookings</h1>
                    <button class="view">View All</button>
                </div>
                <div class="report-body">
                    <table id="reportTable" class="display">
                        <thead>
                            <tr>
                                <th class="t-op">#</th>
                                <th class="t-op">Name</th>
                                <th class="t-op">Email</th>
                                <th class="t-op">Date & Time</th>
                                <th class="t-op">Destination</th>
                                <th class="t-op">Details</th>
                                <th class="t-op">Status</th>
                                <th class="t-op">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $rowNumber = 1;
                            @endphp

                            @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $rowNumber++ }}</td>
                                <td class="t-op-nextlvl">{{ $booking->name }}</td>
                                <td class="t-op-nextlvl">{{ $booking->email }}</td>
                                <td class="t-op-nextlvl">{{ $booking->datetime }}</td>
                                <td class="t-op-nextlvl">{{ $booking->destination }}</td>
                                <td class="t-op-nextlvl">{{ $booking->details }}</td>
                                <td class="t-op-nextlvl">{{ $booking->status }}</td>
                                <td class="t-op-nextlvl">
                                    <a href="{{ route('bookings.edit', $booking->id) }}" class="btn-link"><i
                                            class="fas fa-pencil-alt"></i>&nbsp; &nbsp;</a>

                                    <form method="POST" action="{{ route('bookings.destroy', $booking->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-link"><i class="fas fa-trash-alt"></i> &nbsp;&nbsp; </button>
                                    </form>
                                    <a href="mailto:{{ $booking->email }}?subject=Booking%20Details&body=Hello%20{{ $booking->name }},%0D%0A%0D%0AHere%20are%20the%20details%20of%20your%20booking:%0D%0A%0D%0ADate%20&%20Time:%20{{ $booking->datetime }}%0D%0ADestination:%20{{ $booking->destination }}%0D%0ADetails:%20{{ $booking->details }}%0D%0A%0D%0AStatus:%20{{ $booking->status }}%0D%0A%0D%0ABest%20regards,%0D%0AYour%20Company" class="btn-link">
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/index.js')}}"></script>
</body>

</html>
