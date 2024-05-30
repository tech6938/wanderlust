<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        margin-bottom: 60px;
        /* Height of the footer */
    }

    p.card-text {
        margin-top: -10px;
    }
    </style>
</head>
{{-- {{print_r($data)}} --}}
<body style="background-color: #3cb2f6c9;
background-image: linear-gradient(160deg, #5d84eeda 0%, #80D0C7 100%);">


    <div class="container mt-5">
        <h2 class="text-center m-5 p-3" style="color: #fff; background-color:rgba(0, 89, 255, 0.881);">Wanderlust Weather System</h2>
        <div class="input-group mb-3">
            <form action="{{route('weather')}}" method="post" class="form-inline">
                @csrf
                <div class="d-flex">
                    <div class="form-group">
                        <select class="form-select" name="city" id="city">
                            <option value="-1">-- Select City --</option>
                            <option value="Port Blair">Port Blair</option>
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Lahore">Lahore</option>
                            <option value="Karachi">Karachi</option>
                            <option value="Abbottabad">Abbottabad</option>
                            <option value="	Attock">	Attock</option>
                            <option value="Umerkot">Umerkot</option>
                            <option value="Mirpur">Mirpur</option>
                            <option value="	Quetta">	Quetta</option>
                            <option value="	Phulgran">	Phulgran</option>
                            <option value="	Lohi Bhair">	Lohi Bhair</option>
                            <option value="Shahrak-e-Rawal">Shahrak-e-Rawal</option>
                            <option value="	Killa Saifullah">	Killa Saifullah</option>
                            <option value="Murree">Murree</option>
                            <option value="Hunza Valley">Hunza Valley</option>
                            <option value="Kashmir">Kashmir</option>
                        </select>
                    </div>
                    <button style="margin-left: 20px;" class="btn btn-primary">Search</button>
                </div>
            </form>
<div>
    <a href="{{route('index')}}"><button style="margin-left: 20px; float:right;" class="btn btn-success">Go Back</button></a>

</div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Looks Like</h5>
                        <br>
                        @if (isset($data['weather'][0]['main'])&& $data['weather'][0]['main'] == "Clear")
                        <img src="./images/clear.png" width="130px" alt="">
                        @else-- @endif
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Location Details</h5>
                        <br>
                        <p class="card-text">Country: <b> @if (isset($data["sys"]['country'])) {{$data["sys"]['country']}} @else-- @endif </b></p>
                        <p class="card-text">Name: <b>@if (isset($data["name"])) {{$data["name"]}} @else-- @endif</b></p>
                        <p class="card-text">Latitude: <b>@if (isset($data["coord"]['lat'])) {{$data["coord"]['lat']}} @else-- @endif</b></p>
                        <p class="card-text">Longitude: <b>@if (isset($data["coord"]['lon'])) {{$data["coord"]['lon']}} @else-- @endif</b></p>
                        <p class="card-text">Sunrise: <b>@if (isset($data["sys"]['sunrise'])) {{$data["sys"]['sunrise']}} @else-- @endif</b></p>
                        <p class="card-text">Sunset: <b>@if (isset($data["sys"]['sunset'])) {{$data["sys"]['sunset']}} @else-- @endif</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Temperature &deg; F</h5>
                        <br>
                        <p class="card-text">Temp: <b>@if (isset($data["main"]['temp'])) {{$data["main"]['temp']}} @else-- @endif</b></p>
                        <p class="card-text">Min Temp: <b>@if (isset($data["main"]['temp_min'])) {{$data["main"]['temp_min']}} @else-- @endif</b></p>
                        <p class="card-text">Max Temp: <b>@if (isset($data["main"]['temp_max'])) {{$data["main"]['temp_max']}} @else-- @endif</b></p>
                        <p class="card-text">Feels Like: <b>@if (isset($data["main"]['feels_like'])) {{$data["main"]['feels_like']}} @else-- @endif</b></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Precipitation &percnt;</h5>
                        <br>
                        <p class="card-text">Humidity: <b>@if (isset($data["main"]['humidity'])) {{$data["main"]['humidity']}} @else-- @endif</b></p>
                        <p class="card-text">Pressure: <b>@if (isset($data["main"]['pressure'])) {{$data["main"]['pressure']}} @else-- @endif</b></p>
                        <p class="card-text">Sea Level: <b>@if (isset($data["main"]['sea_level'])) {{$data["main"]['sea_level']}} @else-- @endif</b></p>
                        <p class="card-text">Ground Level: <b>@if (isset($data["main"]['grnd_level'])) {{$data["main"]['grnd_level']}} @else-- @endif</b></p>
                        <p class="card-text">Visibility: <b>@if (isset($data["main"]['visibility'])) {{$data["main"]['visibility']}} @else-- @endif</b></p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Wind m/h</h5>
                        <br>
                        <p class="card-text">Speed: <b>@if (isset($data["wind"]['speed'])) {{$data["wind"]['speed']}} @else-- @endif</b></p>
                        <p class="card-text">Degree: <b>@if (isset($data["wind"]['deg'])) {{$data["wind"]['deg']}} @else-- @endif</b></p>
                        <p class="card-text">Gust: <b>@if (isset($data["wind"]['gust'])) {{$data["wind"]['gust']}} @else-- @endif</b></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>
</body>

</html>
