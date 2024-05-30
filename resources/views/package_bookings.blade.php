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
                                <th class="t-op">#</th>
                                <th class="t-op">Place</th>
                                <th class="t-op">Duration</th>
                                <th class="t-op">Persons</th>
                                <th class="t-op">Description</th>
                                <th class="t-op">Price</th>
                                <th class="t-op">Image</th>
                                <th class="t-op">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $rowNumber = 1;
                            @endphp

                            @foreach ($packages as $package)
                            <tr>
                                <td>{{ $rowNumber++ }}</td>
                                {{-- <td class="t-op-nextlvl">{{ $package->image }}</td> --}}
                                <td class="t-op-nextlvl">{{ $package->place }}</td>
                                <td class="t-op-nextlvl">{{ $package->duration }}</td>
                                <td class="t-op-nextlvl">{{ $package->persons }}</td>
                                <td class="t-op-nextlvl">{{ $package->description }}</td>
                                <td class="t-op-nextlvl">{{ $package->price }}</td>
                                <td class="t-op-nextlvl"><img src="{{ URL::asset('uploads/'.$package->image) }}" width="100px" alt="{{ $package->place }}"></td>
                                <td class="t-op-nextlvl">
                                    <form method="POST" action="{{ route('products.destroy', $package->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-link"><i class="fas fa-trash-alt"></i>
                                            &nbsp;&nbsp; </button>
                                    </form>
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
