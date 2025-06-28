
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crypo</title>
  <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

  <div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
        <div class="mb-3 d-flex justify-content-center">
        <img src="{{ asset('img/logo.png') }}" width="170" height="140" alt="">
    </div>
      <form action="{{ route('register') }}" method="POST">
          @csrf
        <span>Create Account</span>
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
          <input type="text" name="name" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Email Address">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
          <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="form-checkbox">
          <label class="custom-control-label" for="form-checkbox">I agree to the <a href="#!">Terms &amp;
              Conditions</a></label>
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
      <h2>Have an account? <a href='{{ route('login') }}'>Sign In</a></h2>
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
