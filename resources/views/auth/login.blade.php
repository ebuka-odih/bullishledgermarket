
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

  <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
      <div class="mb-3 d-flex justify-content-center">
        <img src="{{ asset('img2/logo2.png') }}" width="170" height="140" alt="">
    </div>

      <form action="{{ route('login') }}" method="POST">
          @csrf
        <span>Sign In</span>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="text-right">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif

        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox">
          <label class="custom-control-label" for="form-checkbox">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
      </form>
      <h2>Don't have an account? <a href='{{ route('register') }}'>Sign up here</a></h2>
    </div>
  </div>

  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
  <script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from crypo.netlify.app/signin-light by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 06:37:18 GMT -->
</html>
