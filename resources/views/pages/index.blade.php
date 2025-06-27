@extends('pages.layout.app')
@section('content')

    <main class="main-area fix">

        <!-- area-bg -->
        <div class="area__bg" data-background="assets/img/bg/area_bg.jpg">

            <!-- banner-area -->
            <section class="banner__area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div style="background: black;" class="banner__img text-center">
                                <img style="background: black;" src="{{ asset('img2/banner.gif') }}" alt="img" class="alltuchtopdown">
{{--                                <img src="{{ asset('front/assets/img/images/banner_img.svg') }}" alt="img" class="alltuchtopdown">--}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner__content">
                                <span class="sub-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z" fill="currentColor"/>
                                    </svg>
                                    Your Smart Trading Platform
                                </span>
                                <h2 class="title">Bullish Ledger
                                     <span>Market Trading</span> Account</h2>
                                <p >
                                    Make real gains on a live account or hone your skills on a free demo
                                </p>
                                <div class="banner__btn">
                                    <a href="{{ route('register') }}" class="tg-btn">
{{--                                        <img src="{{ asset('front/assets/img/icons/btn_right_arrow.svg') }}" alt="icon" class="right_arrow">--}}
                                        <span>
{{--                                            <img src="{{ asset('front/assets/img/icons/btn_icon_02.svg') }}" alt="icon">--}}
                                            OPEN ACCOUNT
                                        </span>
                                    </a>
                                    <a href="{{ route('register') }}" class="tg-btn tg-btn-two">
{{--                                        <img src="{{ asset('front/assets/img/icons/btn_right_arrow.svg') }}" alt="icon" class="right_arrow">--}}
                                        <span>
                                            <img src="{{ asset('front/assets/img/icons/btn_icon_03.svg') }}" alt="icon">
                                            OPEN DEMO ACCOUNT
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->



        </div>
        <!-- area-bg-end -->

        <!-- area-bg -->
        <div class="area__bg-two" data-background="assets/img/bg/area_bg_02.png">

            <!-- choose-area -->
            <section id="features" class="choose__area">
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
                                    <img src="{{ asset('img2/3.jpeg') }}" alt="icon">
                                </div>
                                <div class="choose__content">
                                    <h4 class="title">Deposit to start trading</h4>
                                    p
                                   <p>Open a live account and add funds. We work with more than 20 payment systems.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="choose__item text-center">
                                <div class="choose__icon">
                                    <img src="{{ asset('img2/4.jpeg') }}" alt="icon">
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
                                    <img src="{{ asset('img2/2.jpeg') }}" alt="icon">
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
            <div class="brand__area">
                <div class="container">
                    <div class="brand__inner-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h6 class="brand-title">supported by global brands</h6>
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
        <section id="roadmap" class="roadMap__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="roadMap__content-wrap">
                            <div class="section__title mb-50">
                                <span class="sub-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z" fill="currentColor" />
                                    </svg>
                                    roadmap
                                </span>
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
        <div class="area__bg-three" data-background="front/assets/img/bg/area_bg_03.jpg">

            <!-- advisors-area -->
            <section class="advisors__area">
                <div class="container">

                    <div class="row justify-content-center gutter-y-30 gutter-50">
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

            <!-- section-divider -->
            <div class="section-divider">
                <div class="container">
                    <span></span>
                </div>
            </div>
            <!-- section-divider -->

            <!-- summary-area -->
            <section class="summary__area section-py-120">
                <div id="particles-js"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="summary__img">
                                <img src="{{ asset('img2/1.webp') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
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
                <div class="counter__btn text-center">
                    <a href="#contact" class="tg-btn">
                        <img src="assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">
                        <span>
                            <img src="assets/img/icons/btn_icon_03.svg" alt="">
                            purchase now
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->

        <!-- faq-area -->
        <section id="faq" class="faq__area section-py-120">
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
                                <img src="{{ asset('img2/activity.jpeg') }}" alt="">
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
                                                -Register on the platform, make a minimum deposit of $5000 dollars or euros, choose a trading instrument you want to trade on, set the trade volume and other details, and confirm the order.
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
                                           -Yes. BullishLedgerMarket operates in a regulated environment and provides the risk mitigation tools necessary to make trading on our platform safe as possible.

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
                                                -The Minimum deposit amount is $5000 dollars or euros.
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
                                                -All you have to do to open a trading account and start trading is register and deposit the minimum start up. You must be up to the legal age of 18 and must have a government issued ID card for KYC verification.
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
                                                -To deposit and withdraw funds, you'll need to access your account directly. BullishLedgerMarket does not handle deposits and withdrawals. While you may see buttons for withdrawal and deposit within the account dashboard, clicking on them will redirect you to the deposit or withdrawal webpage. From there, you'll be able to manage your deposits and withdrawals.
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
                                                -BullishLedgerMarket trading strategy operates on the Dollar-Cost Averaging (DCA) principle, which involves dividing investments into periodic buy or sell trades to achieve a better average entry price. In simpler terms, this means spreading out your investments over time to minimize the impact of market volatility. Our AI automatically adjusts this strategy, ensuring it is just right for any asset. You can launch the bot AI prepared for you in one button, but you can also customize it manually if you want to be in control.
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
                                                -Trading is risky. It is impossible to eliminate the possibility of losses completely. We try to offer the most profitable strategies, but due to the market's unpredictability, even some of them may turn out to be less beneficial than we expected. We have a risk mitigation system which guarantee at least 92% money back policy in 10 working days.
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
                                        <img src="front/assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">
                                        <span>
                                            <img src="front/assets/img/icons/btn_icon_03.svg" alt="">
                                            submit now
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <p class="ajax-response mb-0 text-center"></p>
                        </div>
                    </div>
                    <div class="contact__shape-wrap">
                        <img src="{{ asset('front/assets/img/images/contact_shape01.png') }}" alt="img" class="alltuchtopdown">
                        <img src="{{ asset('front/assets/img/images/contact_shape02.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
