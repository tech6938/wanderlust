<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/material-design-iconic-font.min.css') }}" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- for sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body style="background-color: #158acdc9;
  background-image: linear-gradient(160deg, #003ee9 0%, #80D0C7 100%); ">
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form method="POST" action="{{ route('postsignup') }}">
          @csrf
          @if(\Session::has('message'))
          <div class="alert alert-info">
            {{ \Session::get('message') }}
          </div>
          @endif

          <input type="text" placeholder="Full name" id="fullName" name="fullName"/>
          @if ($errors->has('fullName'))
          <span class="text-danger">{{ $errors->first('fullName') }}</span>
          @endif

          <input type="email" placeholder="Email address" id="emailAddress" name="emailAddress"/>
          @if ($errors->has('emailAddress'))
          <span class="text-danger">{{ $errors->first('emailAddress') }}</span>
          @endif

          <input type="password" placeholder="Password" id="userPassword" name="userPassword"/>
          @if ($errors->has('userPassword'))
          <span class="text-danger">{{ $errors->first('userPassword') }}</span>
          @endif

          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" value="Signup" />
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form method="POST" action="{{ route('postlogin') }}">
          @csrf
          @if(\Session::has('error'))
          <div class="alert alert-danger">
            {{ \Session::get('error') }}
          </div>
          @endif
          <input type="email" placeholder="Email address" id="email" name="email" />
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif

          <input type="password" placeholder="Password" id="password" name="password" />
          @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif

          {{-- <a href="#">Forgot password?</a> --}}
          <input type="submit" value="Login" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>

  </body>
</html>
