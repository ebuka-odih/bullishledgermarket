@extends('pages.layout.app')
@section('content')

    <style>
        .tgmobile__search {
            display: none;
        }
    </style>

    <main class="main-area fix">


        <!-- area-bg -->
        <div  class="area__bg-two" data-background="assets/img/bg/area_bg_02.png">

            <!-- choose-area -->
            <section style="margin-top: -150px" id="features" class="choose__area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section__title text-center mb-80">
                                <span class="sub-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z" fill="currentColor" />
                                    </svg>
                                    why choose us
                                </span>
                                <h2 class="title">Core features of Iconic</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="choose__item text-center">
                                <div class="choose__icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 16 16"><path fill="currentColor" d="m8 16l-2-3h1v-2h2v2h1zm7-15v8H1V1zm1-1H0v10h16z"/><path fill="currentColor" d="M8 2a3 3 0 1 1 0 6h5V7h1V3h-1V2zM5 5a3 3 0 0 1 3-3H3v1H2v4h1v1h5a3 3 0 0 1-3-3"/></svg>
                                    </span>
{{--                                    <img src="{{ asset('img2/3.jpeg') }}" alt="icon">--}}
                                </div>
                                <div class="choose__content">
                                    <h4 class="title">Deposit to start trading</h4>
                                   <p>Open a live account and add funds. We work with more than 20 payment systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="choose__item text-center">
                                <div class="choose__icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 64 64"><ellipse cx="10.97" cy="52.578" fill="currentColor" rx="1.742" ry="1.188"/><path fill="currentColor" d="m62 46.669l-.654-.384c-.05-.029-5.047-2.994-6.289-6.592l-.277-.797l-.512.669c-.016.021-.726.899-2.713 1.929c-1.471-8.373-6.475-18.369-13.051-22.631c1.88.152 3.766-.004 5.586-.666c1.096-.398.623-2.184-.483-1.78c-1.492.543-2.987.691-4.479.615c3.663-3.357 6.539-8.502 6.539-12.264c0-.904 0-2.587-1.34-2.587c-.538 0-.973.336-1.574.8c-.922.711-2.314 1.787-4.359 1.787c-.779 0-2.205-.822-3.351-1.482C33.658 2.489 32.773 2 32.029 2c-1.232 0-3.043.996-4.641 1.875c-.65.357-1.539.847-1.723.894c-2.316 0-3.661-1.068-4.553-1.775c-.52-.414-.897-.714-1.4-.714c-1.318 0-1.318 1.581-1.318 3.412c0 3.534 2.692 8.199 6.217 11.334c-2.221.159-4.411.83-5.95 2.321c-.85.822.438 2.126 1.285 1.306c1.279-1.24 2.956-1.771 4.75-1.874q.076.274.189.54C17.369 24.72 12.03 37.545 12.03 46.203c0 .854.066 1.627.168 2.355c-1.938-.861-2.645-1.616-2.659-1.633l-.516-.595l-.254.75c-1.123 3.304-6.005 6.17-6.054 6.199L2 53.694l.727.393c.255.138.508.259.763.39l-.46.319l.243 3.04L22.326 62l7.224-4.621q1.093.006 2.218.006L40.212 62l19.089-6v-3.209l-.505-.303q.378-.24.755-.491l.669-.447l-.147-.072l.851-.233l.144-3.336l-.492-.349q.393-.235.785-.483zM20.213 5.692c0-.444.006-.79.015-1.059c.153.12.331.251.521.386c.583 1.396 1.686 3.406 3.556 4.672c2.272 1.54 1.97-.23 3.182-1.846c1.212-1.615 2.032-2.461 4.062 1.693c.885 1.811 2.36-3.25 3.762-3.989c.371.202.741.39 1.104.55c2.514 4.088 3.679 2.813 5.912-.585c.614-.36 1.118-.746 1.519-1.055q.003.139.004.311c0 3.21-2.623 7.814-5.835 10.817a3.6 3.6 0 0 0-.642-1.053c-1.297-1.469-3.324.16-4.285 1.229c-1.705-.548-4.483-2.057-6.293-1.193a4.6 4.6 0 0 0-1.226.831c-2.96-2.698-5.356-6.593-5.356-9.709m16.204 10.974a27 27 0 0 1-1.337-.32c.558-.481 1.07-.649 1.285.066c.023.078.037.167.052.254m-7.6.621q-.496-.096-1.021-.165a14 14 0 0 1-.779-.525c.914-.613 2.49-.287 3.996.224c-.743.075-1.476.237-2.196.466m.454 2.64c-.56.14-1.17.084-1.697-.126c.214-.113.43-.211.646-.31c.35.169.7.31 1.051.436M10.774 56.379a39.3 39.3 0 0 1-6.912-2.733c1.357-.892 4.313-3.049 5.515-5.641c.824.647 2.726 1.827 6.43 2.733c-.063.102-.14.211-.214.318c-3.162-.828-4.96-1.875-4.989-1.893l-.436-.26l-.209.467c-.275.612-.92.704-1.279.704c-.1 0-.167-.007-.176-.008l-.357-.052l-.13.342c-.266.698-1.358 1.61-1.758 1.903l-.668.49l.764.313c.284.116.361.223.365.251c.01.069-.111.251-.24.356l-.582.469l.677.313c1.387.64 2.958 1.17 4.529 1.607q-.186.183-.33.321m8.064-3.726c1.398.196 2.947.32 4.639.32h.001q.527 0 1.073-.017a1 1 0 0 0 .103.213q.133.203.361.334l-2.552 2.181l-.146-.003c-1.137 0-1.985.418-2.392 1.162a69 69 0 0 1-4.602-.747a51 51 0 0 0 3.515-3.443M7.489 53.85c.1-.189.165-.418.13-.668a1 1 0 0 0-.307-.59c.449-.385 1.068-.979 1.408-1.594c.773-.011 1.411-.304 1.813-.822c.677.354 2.202 1.069 4.455 1.689c-.921 1.155-2.162 2.465-3.127 3.439c-1.504-.398-3.019-.878-4.372-1.454m14.251 4.209l-.205.001c-.861 0-3.714-.07-7.483-.855c.132-.112.269-.227.396-.337c3.058.639 5.524.913 5.709.934l.366.039l.113-.355c.247-.766 1.158-.879 1.68-.879c.143 0 .238.009.249.01l.194.021l4.433-3.788l-1.185-.039c-.396-.014-.563-.103-.604-.164l.251-.657l-.694.029q-.759.033-1.483.033h-.001c-1.396 0-2.691-.092-3.888-.237l.278-.328c2.416.323 5.309.522 8.802.497c-.834 1.17-2.914 3.657-6.928 6.075m10.024-4.345v1.825q-.853 0-1.665-.006l-.163-2.054l-1.354.11c.912-1.078 1.301-1.797 1.336-1.862l.367-.694l-.775.014c-7.418.136-12.256-.748-15.31-1.73c-.223-.902-.352-1.922-.352-3.113c0-8.123 5.191-20.401 12.083-25.377c1.221 1.181 3.073 1.698 4.833.549c.386-.252.722-.582 1.037-.933c.075.002.152.019.228.019c.252 0 .508-.021.763-.053c.323.129.639.259.932.388c1.403.618 2.601.234 3.419-.618c6.313 3.82 11.371 13.925 12.702 22.093c-2.886 1.154-7.464 2.28-14.49 2.478c1.386-.792 2.426-2.124 2.052-3.874c-.393-1.85-1.939-2.37-3.54-2.455q-.007-1.302.002-2.605c.491.217.962.467 1.39.734c.756.475 1.44-.756.689-1.231a10.3 10.3 0 0 0-2.072-.999q.015-1.508.015-3.014c.001-.92-1.366-.92-1.366 0q-.001 1.325-.014 2.646a7.1 7.1 0 0 0-2.202-.037a27 27 0 0 0-.432-1.97c-.226-.886-1.546-.511-1.317.378c.168.639.305 1.275.418 1.92c-.058.022-.121.033-.178.059c-1.852.733-2.982 2.602-1.627 4.345c.631.812 1.456 1.14 2.359 1.249c.049 1.203.08 2.407.115 3.609c-.605-.393-1.156-.897-1.655-1.43c-.618-.652-1.583.355-.966 1.006c.839.893 1.72 1.568 2.675 2c.043 1.027.104 2.057.204 3.079c.088.907 1.456.912 1.367 0a54 54 0 0 1-.187-2.657c.52.09 1.066.113 1.646.058c.065.946.141 1.892.249 2.838c.062.542.58.755.962.645l-.085 1.964c-.602.054-1.216.104-1.856.146l-.762.05l.406.656c.041.066.502.795 1.531 1.856h-1.412zm24.888-6.582c-1.257.591-2.847 1.133-4.467 1.606c-.996-1.029-2.27-2.402-3.221-3.62c2.119-.642 3.305-1.304 3.84-1.661c.423.373.983.567 1.646.566c.22 0 .415-.021.565-.045c.48.622 1.254 1.34 1.738 1.769q-.344.353-.331.776c.008.24.104.444.23.609m-7.155 3.286q.307.27.63.55c-4.054 1.075-7.071 1.192-7.728 1.203c-4.198-2.561-6.374-5.271-7.213-6.491c3.513-.088 6.417-.406 8.839-.844a24 24 0 0 0 .299.36a53 53 0 0 1-5.877.583l-.807.034l.444.679c-.001.001-.091.169-.687.285l-.969.189l4.764 3.857l.222-.06c.005-.001.425-.114.933-.114c.733 0 1.234.223 1.486.659l.16.276l.311-.055a87 87 0 0 0 5.193-1.111M35.4 47.479l-1.138-.062c-.053-.568-.106-1.136-.146-1.704c.2.332.61.956 1.284 1.766m-1.408-3.661a105 105 0 0 1-.119-4.041q.248.01.48.043c1.768.268 2.23 2.234.85 3.34c-.36.285-.775.494-1.211.658m10.439 6.752c-.448-.553-1.161-.843-2.083-.843c-.385 0-.724.052-.938.094l-2.995-2.427q.372-.214.509-.546a1 1 0 0 0 .052-.171c2.374-.13 4.374-.367 6.065-.657c.82.915 2.025 2.177 3.623 3.644c-1.963.467-3.6.787-4.233.906M32.505 39.813c.019 1.449.055 2.902.132 4.35c-.129.02-.256.045-.383.058c-.43.049-.838.013-1.226-.085c-.049-1.4-.081-2.803-.134-4.204c.538-.025 1.083-.078 1.611-.119m-1.68-1.265a44 44 0 0 0-.31-3.286a5.3 5.3 0 0 1 1.987.101a285 285 0 0 0-.005 3.067c-.439.024-.856.066-1.223.099a6 6 0 0 1-.449.019m-1.372-.175c-.085-.023-.169-.041-.256-.07a2.7 2.7 0 0 1-1.057-.667c-.854-.797.318-1.579 1.057-1.95c.116.89.196 1.788.256 2.687M40.49 57.839c-4.341-2.218-6.67-4.683-7.595-5.825c.665-.05 1.294-.11 1.917-.173l7.118 4.62l15.61-4.288c-8.05 4.852-16.003 5.591-17.05 5.666m12.892-7.89l-.462-.463c1.776-.538 3.494-1.162 4.775-1.848l.779-.419l-.79-.402c-.177-.091-.35-.258-.353-.321c.002-.024.072-.152.375-.326l.578-.332l-.514-.428c-.016-.013-1.619-1.344-2.182-2.201l-.186-.28l-.319.093c-.003 0-.277.079-.633.079c-.55.001-.962-.179-1.226-.533l-.292-.387l-.366.315c-.019.016-1.152.945-4.191 1.823a10 10 0 0 1-.289-.44c3.685-1.117 5.568-2.469 6.384-3.209c1.31 2.834 4.429 5.117 5.783 6.012a38 38 0 0 1-6.871 3.267"/><path fill="currentColor" d="M44.38 47.117c-.997-.271-2.122-.086-2.516.409c-.391.497.103 1.123 1.099 1.396c.998.271 2.122.085 2.516-.411c.391-.497-.101-1.121-1.099-1.394"/></svg>
                                    </span>
{{--                                    <img src="{{ asset('img2/4.jpeg') }}" alt="icon">--}}
                                </div>
                                <div class="choose__content">
                                    <h4 class="title">Increased profitability</h4>
                                    <p>
                                        Trade any of assets and increase your profitability to 93% using our advance trading tools.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="choose__item text-center">
                                <div class="choose__icon">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="m18.935 13.945l-.67-3.648c-.29-1.576-.435-2.364-1.008-2.83S15.86 7 14.213 7H9.787c-1.647 0-2.47 0-3.044.467c-.573.466-.718 1.254-1.008 2.83l-.67 3.648c-.6 3.271-.901 4.907.024 5.98C6.014 21 7.724 21 11.142 21h1.716c3.418 0 5.128 0 6.053-1.074s.625-2.71.024-5.98"/><path d="M10.438 16.667v-5.334m1.562 0V10m0 8v-1.333M10.438 14h3.124m0 0c.518 0 .938.448.938 1v.667c0 .552-.42 1-.937 1H9.5M13.563 14c.517 0 .937-.448.937-1v-.667c0-.552-.42-1-.937-1H9.5M21 11a1.5 1.5 0 0 0 .414-.305C22 10.089 22 9.11 22 7.152s0-2.936-.586-3.544S19.886 3 18 3H6c-1.886 0-2.828 0-3.414.608S2 5.195 2 7.152s0 2.936.586 3.543q.18.188.414.305"/></g></svg>
                                    </span>
{{--                                    <img src="{{ asset('img2/2.jpeg') }}" alt="icon">--}}
                                </div>
                                <div class="choose__content">
                                    <h4 class="title">Withdraw & Reinvest</h4>
                                    <p>
                                        Withdraw your profits easily to your bank card or external wallet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->

            <!-- brand-area -->
            <div style="margin-top: -100px" class="brand__area">
                <div class="container">
                    <div class="brand__inner-wrap">
                        <div style="margin-top: -20px" class="row justify-content-center">
                            <div class="col-lg-6">
                                <h6 class="brand-title">SUPPORTED BY OUR PARTNERS</h6>
                            </div>
                        </div>
                        <div class="swiper-container brand-active fix">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('img2/etoro.svg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('img2/xm.svg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('img2/exness.svg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('img2/ic_markets.svg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('img2/alpari.svg') }}" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
        </div>

        <!-- area-bg-end -->

        <!-- roadMap-area -->
        <section style="margin-top: -100px" id="roadmap" class="roadMap__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="roadMap__content-wrap">
                            <div class="section__title mb-50">
{{--                                <span class="sub-title">--}}
{{--                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z" fill="currentColor" />--}}
{{--                                    </svg>--}}
{{--                                    roadmap--}}
{{--                                </span>--}}
                                <h2 class="title">Online trading account</h2>
                            </div>
                            <div class="roadMap__img">
                                <img src="{{ asset('img2/xl_redesign.webp') }}" alt="img" class="alltuchtopdown">
                            </div>
                            <div class="roadMap__shape">
                                <img src="{{ asset('front/assets/img/images/roadmap_shape.png') }}" alt="shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                       <p>It only takes a few minutes to open a free trading account with {{ env('APP_NAME') }}.
Our developers put special focus on making sure your account is easy to manage and enjoyable to use. But a convenient trading account and 24/7 support from the Bullish Ledger team only scratches the surface of what we have to offer. And if you want to hone your trading skills with none of the risk, try out our free Demo account.</p>

                        <h4>Opening a live trading account</h4>
                        <p>
                            Here's all you need to do to open a free trading account with BullishLedgerMarket:
                        </p>
                        <ul>
                            <li>1. Register on BullishLedgerMarket</li>
                            <li>2. Verify your profile</li>
                            <li>3. Deposit $</li>
                        </ul>
                        <p>
                            And you're ready to go! <br><br>
                            Be sure to check out our trading tips and hints. A wealth of trading information is available at your fingertips.
                        </p>
                        <h4>Advantages of a live trading account</h4>
                        <p>
                            BullishLedgerMarket's live trading account sets itself apart in its simplicity. We made sure to make our platform as simple and enjoyable as possible while ensuring the highest degree of financial safety to make your live trading experience as smooth and fruitful as possible.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- roadMap-area-end -->

        <!-- area-bg -->
        <div  class="area__bg-three" data-background="front/assets/img/bg/area_bg_03.jpg">

            <!-- advisors-area -->
            <section  class="advisors__area">
                <div class="container">

                    <div style="margin-top: -100px" class="row justify-content-center gutter-y-30 gutter-50">
                        <img src="{{ asset('img2/5.jpeg') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- advisors-area-end -->

            <!-- ticker-area -->
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
              {
              "symbols": [
                {
                  "proName": "FOREXCOM:SPXUSD",
                  "title": "S&P 500 Index"
                },
                {
                  "proName": "FOREXCOM:NSXUSD",
                  "title": "US 100 Cash CFD"
                },
                {
                  "proName": "FX_IDC:EURUSD",
                  "title": "EUR to USD"
                },
                {
                  "proName": "BITSTAMP:BTCUSD",
                  "title": "Bitcoin"
                },
                {
                  "proName": "BITSTAMP:ETHUSD",
                  "title": "Ethereum"
                },
                {
                  "description": "",
                  "proName": "NASDAQ:TSLA"
                },
                {
                  "description": "",
                  "proName": "NASDAQ:NVDA"
                },
                {
                  "description": "",
                  "proName": "NASDAQ:AAPL"
                },
                {
                  "description": "",
                  "proName": "NASDAQ:MSFT"
                },
                {
                  "description": "",
                  "proName": "NASDAQ:META"
                },
                {
                  "description": "",
                  "proName": "COINBASE:SOLUSD"
                },
                {
                  "description": "",
                  "proName": "BITSTAMP:XRPUSD"
                },
                {
                  "description": "",
                  "proName": "BINANCE:BNBUSDT"
                }
              ],
              "showSymbolLogo": true,
              "isTransparent": false,
              "displayMode": "adaptive",
              "colorTheme": "dark",
              "locale": "en"
            }
              </script>
            </div>
            <!-- TradingView Widget END -->

            <!-- ticker-area-end -->



            <!-- summary-area -->
            <section class="summary__area section-py-120">
                <div id="particles-js"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div style="margin-right: -70px" class="col-lg-6">
                            <div class="summary__img">
                                <img height="550" src="{{ asset('img2/1.webp') }}" alt="img">
                            </div>
                        </div>
                        <div  class="col-lg-6">
                            <div class="summary__content">
                                <div class="section__title mb-50">

                                    <h2 class="title">Automate your trading</h2>
                                </div>
                                <div class="progress__wrap">
                                    <p>
                                        Our integration with Trading robots is fully automated with your account, launched in minutes.  Start with the AI strategy or create your own in just a few clicks, a top feature already in use by 50M+ traders. will allow you to access both supercharged charting and advanced trading tools. Gain unparalleled insights for informed decision-making.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- summary-area-end -->

        </div>
        <!-- area-bg-end -->

        <!-- counter-area -->
        <section class="counter__area">
            <div class="container">
                <div class="counter__item-wrap">
                    <div class="row gx-0">
                       @include('pages.layout.plan')
                    </div>
                </div>
{{--                <div class="counter__btn text-center">--}}
{{--                    <a href="#contact" class="tg-btn">--}}
{{--                        <img src="assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">--}}
{{--                        <span>--}}
{{--                            <img src="assets/img/icons/btn_icon_03.svg" alt="">--}}
{{--                            purchase now--}}
{{--                        </span>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- faq-area -->
        <section style="margin-top: -50px" id="faq" class="faq__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq__content">
                            <div class="section__title mb-20">
                                <h2 class="titl">Unusual options activity</h2>
                            </div>
                            <p>Detect market shifts, get live insights on high-volume trades, and view institutional block buys and sales</p>
                            <p></p>
                            <div>
                                <img height="600" src="{{ asset('img2/activity-removebg-preview.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__wrap">
                            <h2>FAQ</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How do I start trading?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Register on the platform, make a minimum deposit of $5000 dollars or euros, choose a trading instrument you want to trade on, set the trade volume and other details, and confirm the order.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is BullishLedgerMarket safe?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                           Yes. BullishLedgerMarket operates in a regulated environment and provides the risk mitigation tools necessary to make trading on our platform safe as possible.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is the minimum deposit amount?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                The Minimum deposit amount is $5000 dollars or euros.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What do you need to open a trading account?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                All you have to do to open a trading account and start trading is register and deposit the minimum start up. You must be up to the legal age of 18 and must have a government issued ID card for KYC verification.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                            How can I deposit and withdraw?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                To deposit and withdraw funds, you'll need to access your account directly. BullishLedgerMarket does not handle deposits and withdrawals. While you may see buttons for withdrawal and deposit within the account dashboard, clicking on them will redirect you to the deposit or withdrawal webpage. From there, you'll be able to manage your deposits and withdrawals.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
                                            How does BullishLedgerMarket AI trading strategy work?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                BullishLedgerMarket trading strategy operates on the Dollar-Cost Averaging (DCA) principle, which involves dividing investments into periodic buy or sell trades to achieve a better average entry price. In simpler terms, this means spreading out your investments over time to minimize the impact of market volatility. Our AI automatically adjusts this strategy, ensuring it is just right for any asset. You can launch the bot AI prepared for you in one button, but you can also customize it manually if you want to be in control.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
                                            What happens if I lose my money?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Trading is risky. It is impossible to eliminate the possibility of losses completely. We try to offer the most profitable strategies, but due to the market's unpredictability, even some of them may turn out to be less beneficial than we expected. We have a risk mitigation system which guarantee at least 92% money back policy in 10 working days.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact__area">
            <div class="container">
                <div class="contact__inner-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section__title text-center mb-50">
                                <span class="sub-title white-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z"
                                            fill="currentColor" />
                                    </svg>
                                    get in touch
                                </span>
                                <h2 class="title">Ask anything from anywhere!</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <form action="https://themeadapt.com/tf/ironik/assets/mail.php" class="contact__form" method="POST" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label for="name">Full name</label>
                                            <input id="name" name="name" type="text" placeholder="E.g. Jhon">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-grp">
                                            <label for="email">Email address</label>
                                            <input id="email" name="email" type="email" placeholder="E.g. Jhon">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Let us know"></textarea>
                                </div>
                                <div class="submit__btn text-center">
                                    <button type="submit" class="tg-btn tg-btn-two">
                                        <span>
                                            submit now
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <p class="ajax-response mb-0 text-center"></p>
                        </div>
                    </div>
{{--                    <div class="contact__shape-wrap">--}}
{{--                        <img src="{{ asset('front/assets/img/images/contact_shape01.png') }}" alt="img" class="alltuchtopdown">--}}
{{--                        <img src="{{ asset('front/assets/img/images/contact_shape02.png') }}" alt="img">--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
