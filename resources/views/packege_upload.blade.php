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
        <div class="message">

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
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="report-header">
                    <h1 class="recent-Articles">Add Package</h1>
                    <button class="view" onclick="window.location.href='{{ route('packages') }}'">View All</button>
                </div>
                <div class="report-body">
                    <form method="POST" action="{{ route('package.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>

                        <div class="form-group">
                            <label for="place">Place:</label>
                            <input type="text" class="form-control" id="place" name="place" required>
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration:</label>
                            <input type="text" class="form-control" id="duration" name="duration" required>
                        </div>

                        <div class="form-group">
                            <label for="persons">Persons:</label>
                            <input type="number" class="form-control" id="persons" name="persons" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4"
                                required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Save Package</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('js/index.js')}}"></script>
</body>

</html>
