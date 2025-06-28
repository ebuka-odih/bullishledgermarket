<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @livewireScripts

    <style>
        .active {
            color: #465df6;
        }
    </style>

   <script src="//code.jivosite.com/widget/3jZqtmcSsI" async></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg">

      <a class='navbar-brand' href='{{ route('index') }}'>
           <h3 style="font-weight: bolder">{{ env('APP_NAME') }}</h3>
{{--          <img src="{{ asset('assets/img/logo-dark.svg') }}" alt="logo">--}}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}" >
              Dashboard
            </a>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link {{ request()->routeIs('user.deposit') ? 'active' : '' }}" href="{{ route('user.deposit') }}" >
              Deposit
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link {{ request()->routeIs('user.withdrawal') ? 'active' : '' }} " href="{{ route('user.withdrawal') }}" >
              Withdrawal
            </a>
          </li>
           <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('user.sub.plans') }}" >
              Subscription
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('user.copyTrading.index') }}" >
              Copy Trading
            </a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link" href="{{ route('user.aiTrader.index') }}" >
              AI Trading
            </a>
          </li>

        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item header-custom-icon">
            <a class="nav-link" href="#" id="clickFullscreen">
              <i class="icon ion-md-expand"></i>
            </a>
          </li>

          <li class="nav-item dropdown header-img-icon">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="{{ asset('assets/img/avatar.svg') }}" alt="avatar">
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-header d-flex flex-column align-items-center">
                <div class="figure mb-3">
                  <img src="{{ asset('assets/img/avatar.svg') }}" alt="">
                </div>
                <div class="info text-center">
                  <p class="name font-weight-bold mb-0">{{ auth()->user()->name }}</p>
                  <p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
                </div>
              </div>
              <div class="dropdown-body">
                <ul class="profile-nav">
                  <li class="nav-item">
                    <a class='nav-link' href='{{ route('user.profile') }}'>
                      <i class="icon ion-md-person"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class='nav-link' href='settings-wallet-light.html'>
                      <i class="icon ion-md-wallet"></i>
                      <span>My Wallet</span>
                    </a>
                  </li>
{{--                  <li class="nav-item" id="changeThemeLight">--}}
{{--                    <a href="#!" class="nav-link">--}}
{{--                      <i class="icon ion-md-sunny"></i>--}}
{{--                      <span>Theme</span>--}}
{{--                    </a>--}}
{{--                  </li>--}}
                  <li class="nav-item">
                      <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="nav-link red" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <i class="icon ion-md-power"></i>
                                 <span>Log Out</span>
                            </a>
                      </form>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  @yield('content')
   @include('dashboard.layout.alert')


  <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/amcharts-core.min.js') }}"></script>
  <script src="{{ asset('assets/js/amcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.mCustomScrollbar.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script>
    $('tbody, .market-news ul').mCustomScrollbar({
      theme: 'minimal',
    });
  </script>

@livewireScripts

<script>
async function convertUsdToBtc(usdBalance) {
    try {
        // Fetch the current BTC price in USD from CoinGecko API
        const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd');
        const data = await response.json();

        // Get the current BTC price in USD
        const btcPriceInUsd = data.bitcoin.usd;

        // Convert the user's USD balance to BTC
        const btcBalance = usdBalance / btcPriceInUsd;

        return btcBalance;
    } catch (error) {
        console.error('Error fetching BTC price:', error);
        return null;
    }
}

// Call the function and update the span element with the BTC balance
const usdBalance = {{ $user->balance }}; // Pass the user's USD balance from Blade to JS

convertUsdToBtc(usdBalance).then(btcBalance => {
    if (btcBalance !== null) {
        // Format the BTC balance to 8 decimal places for precision
        document.getElementById('btc-balance').textContent = ` ${btcBalance.toFixed(8)}`;
    }
});
</script>
</body>


<!-- Mirrored from crypo.netlify.app/exchange-light-fluid by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 06:36:59 GMT -->
</html>
