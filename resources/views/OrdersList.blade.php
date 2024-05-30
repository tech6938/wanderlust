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


            <div class="report-container">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <div class="report-header">
                    <h1 class="recent-Articles">Pacakges Bookings</h1>
                    <button class="view">View All</button>
                </div>
                <div class="report-body">
                    <table id="reportTable" class="display">
                        <thead>
                            <tr>
                                {{-- <th class="t-op">#</th> --}}
                                <th class="t-op">Order ID</th>
                                <th class="t-op">TxnRefNo</th>
                                <th class="t-op">Amount</th>
                                <th class="t-op">Description</th>
                                <th class="t-op">status</th>
                                {{-- <th class="t-op">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $rowNumber = 1;
                            @endphp

                            @foreach ($orders as $order)
                            <tr>
                                {{-- <td>{{ $rowNumber++ }}</td> --}}
                                <td class="t-op-nextlvl">{{ $order->order_id }}</td>
                                <td class="t-op-nextlvl">{{ $order->TxnRefNo }}</td>
                                <td class="t-op-nextlvl">{{ $order->amount }}</td>
                                <td class="t-op-nextlvl">{{ $order->description }}</td>
                                <td class="t-op-nextlvl">{{ $order->status }}</td>
                                {{-- <td class="t-op-nextlvl"> --}}
                                    {{-- <a href="{{ route('bookings.edit', $booking->id) }}" class="btn-link"><i
                                            class="fas fa-pencil-alt"></i>&nbsp; &nbsp;</a> --}}

                                    {{-- <form method="POST" action="{{ route('bookings.destroy', $booking->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-link"><i class="fas fa-trash-alt"></i> &nbsp;&nbsp; </button>
                                    </form> --}}
                                    {{-- <a href="mailto:{{ $order->email }}?subject=Booking%20Details&body=Hello%20{{ $order->name }},%0D%0A%0D%0AHere%20are%20the%20details%20of%20your%20booking:%0D%0A%0D%0ADate%20&%20Time:%20{{ $booking->datetime }}%0D%0ADestination:%20{{ $booking->destination }}%0D%0ADetails:%20{{ $booking->details }}%0D%0A%0D%0AStatus:%20{{ $booking->status }}%0D%0A%0D%0ABest%20regards,%0D%0AYour%20Company" class="btn-link">
                                        <i class="fas fa-envelope"></i> --}}
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
