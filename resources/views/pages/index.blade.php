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
                            <div class="banner__img text-center">
                                <img src="{{ asset('front/assets/img/images/banner_img.svg') }}" alt="img" class="alltuchtopdown">
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
                                    <a href="blog-details.html" class="tg-btn">
                                        <img src="{{ asset('front/assets/img/icons/btn_right_arrow.svg') }}" alt="icon" class="right_arrow">
                                        <span>
                                            <img src="{{ asset('front/assets/img/icons/btn_icon_02.svg') }}" alt="icon">
                                            OPEN ACCOUNT
                                        </span>
                                    </a>
                                    <a href="#contact" class="tg-btn tg-btn-two">
                                        <img src="{{ asset('front/assets/img/icons/btn_right_arrow.svg') }}" alt="icon" class="right_arrow">
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

            <!-- features-area -->
            <section class="features__area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="token__wrap">
                                <h3 class="title">Token sales progress</h3>
                                <div class="coin__progress-wrap">
                                    <ul class="list-wrap coin__progress-title">
                                        <li><span>Raised</span> 5,723 coin</li>
                                        <li><span>total coin</span> 3,499,000</li>
                                    </ul>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                    <ul class="list-wrap coin__progress-cap">
                                        <li><span>soft cap</span> 57,000</li>
                                        <li><span>hard cap</span> 2,500,000</li>
                                    </ul>
                                </div>
                                <div class="countdown__wrap">
                                    <h5 class="title">Token sale ends in:</h5>
                                    <div class="coming-time" data-countdown="2026/12/30"></div>
                                </div>
                                <div class="token__btn">
                                    <a href="#contact" class="tg-btn">
                                        <img src="assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">
                                        <span>
                                            <img src="assets/img/icons/btn_icon_03.svg" alt="icon">
                                            register & buy token
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="token__sales-info">
                                <h2 class="title">Sales information</h2>
                                <ul class="list-wrap">
                                    <li><span>Public sale starts</span>January 01, 2025</li>
                                    <li><span>Sale ends</span>december 30, 2026</li>
                                    <li><span>Token supply</span>499,000,000</li>
                                    <li><span>T. allocated for ico</span>299,000,000</li>
                                    <li><span>hard cap</span>2,500,000</li>
                                    <li><span>soft cap</span>57,000</li>
                                    <li><span>token value</span>1 ETH = 3177.38 CIC</li>
                                    <li class="payment-method"><span>accepted</span>eth, btc, shiv, crt</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- marquee-area -->
            <section class="marquee__area">
                <div class="slider__marquee clearfix marquee-wrap">
                    <div class="marquee_mode marquee__group">
                        <h6 class="marquee__item">Most powerful & optimistic solutions for ICO platform</h6>
                        <h6 class="marquee__item">Most powerful & optimistic solutions for ICO platform</h6>
                    </div>
                </div>
            </section>
            <!-- marquee-area-end -->

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
                                    <img src="{{ asset('front/assets/img/icons/choose-icon01.svg') }}" alt="icon">
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
                                    <img src="{{ asset('front/assets/img/icons/choose-icon02.svg') }}" alt="icon">
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
                                    <img src="{{ asset('front/assets/img/icons/choose-icon03.svg') }}" alt="icon">
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
                                        <img src="{{ asset('front/assets/img/brand/brand_img01.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img02.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img03.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img04.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img05.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img06.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('front/assets/img/brand/brand_img03.png') }}" alt="img">
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
                                <img src="{{ asset('front/assets/img/images/roadmap_img.png') }}" alt="img" class="alltuchtopdown">
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
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section__title text-center mb-80">
                                <span class="sub-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z"
                                            fill="currentColor" />
                                    </svg>
                                    our advisors
                                </span>
                                <h2 class="title">Meet with our avengers</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center gutter-y-30 gutter-50">
                        <div class="col-lg-4 col-md-6">
                            <div class="advisors__item">
                                <div class="advisors__thumb">
                                    <img src="assets/img/images/advisors_img01.jpg" alt="img">
                                </div>
                                <div class="advisors__content">
                                    <div class="advisors__content-left">
                                        <span>founder</span>
                                        <h3 class="title">Javier C. Emerson</h3>
                                    </div>
                                    <ul class="list-wrap advisors__social">
                                        <li>
                                            <a href="https://telegram.org/" target="_blank">
                                                <img src="assets/img/icons/telegram.svg" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <img src="assets/img/icons/youtube.svg" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="advisors__item">
                                <div class="advisors__thumb">
                                    <img src="assets/img/images/advisors_img02.jpg" alt="img">
                                </div>
                                <div class="advisors__content">
                                    <div class="advisors__content-left">
                                        <span>CEO</span>
                                        <h3 class="title">Diego H. Redmond</h3>
                                    </div>
                                    <ul class="list-wrap advisors__social">
                                        <li>
                                            <a href="https://telegram.org/" target="_blank">
                                                <img src="assets/img/icons/telegram.svg" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <img src="assets/img/icons/youtube.svg" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="advisors__item">
                                <div class="advisors__thumb">
                                    <img src="assets/img/images/advisors_img03.jpg" alt="img">
                                </div>
                                <div class="advisors__content">
                                    <div class="advisors__content-left">
                                        <span>Head advisor</span>
                                        <h3 class="title">Julian T. Beaumont</h3>
                                    </div>
                                    <ul class="list-wrap advisors__social">
                                        <li>
                                            <a href="https://telegram.org/" target="_blank">
                                                <img src="assets/img/icons/telegram.svg" alt="icon">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/" target="_blank">
                                                <img src="assets/img/icons/youtube.svg" alt="icon">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                <img src="assets/img/images/summary_img.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="summary__content">
                                <div class="section__title mb-50">
                                    <span class="sub-title">
                                        <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z"
                                                fill="currentColor" />
                                        </svg>
                                        summary of ico
                                    </span>
                                    <h2 class="title">Token allocation summary</h2>
                                </div>
                                <div class="progress__wrap">
                                    <div class="progress__item">
                                        <div class="progress__item-top">
                                            <h3 class="progress__title">Token Offer - <span>46.000.000</span></h3>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%;"></div>
                                        </div>
                                    </div>
                                    <div class="progress__item">
                                        <div class="progress__item-top">
                                            <h3 class="progress__title">UTO Bounties - <span>11.500.000</span></h3>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="progress__item">
                                        <div class="progress__item-top">
                                            <h3 class="progress__title">UTO Community Reserve - <span>423.000.000</span></h3>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                    <div class="progress__item">
                                        <div class="progress__item-top">
                                            <h3 class="progress__title">UTO Community Building - <span>23.000.000</span></h3>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%;"></div>
                                        </div>
                                    </div>
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
                        <div class="col-lg-4">
                            <div class="counter__item">
                                <span class="title">pre-sales</span>
                                <h2 class="count"><span class="odometer" data-count="25"></span>%</h2>
                                <p>early bonus</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter__item">
                                <span class="title">ICO SALE-WEEK 1</span>
                                <h2 class="count"><span class="odometer" data-count="15"></span>%</h2>
                                <p>early bonus</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter__item">
                                <span class="title">ICO SALE-WEEK 2</span>
                                <h2 class="count"><span class="odometer" data-count="1"></span>%</h2>
                                <p>early bonus</p>
                            </div>
                        </div>
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
                                <span class="sub-title">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 0H0V1V15V16H2V13.25L7.13991 8.75258C7.59524 8.35417 7.59524 7.64584 7.13991 7.24742L2 2.75V0Z" fill="currentColor" />
                                    </svg>
                                    available platform
                                </span>
                                <h2 class="title">Our Iconic is available in multi-device</h2>
                            </div>
                            <p>Try it now for free on iOS, Android, PC, Web - whatever your flavor, we’ve got you covered.</p>
                            <ul class="download__icon-wrap list-wrap">
                                <li>
                                    <a href="#!" class="download__icon">
                                        <div class="icon-shape">
                                            <img src="assets/img/icons/download_icon_shape.svg" alt="icon">
                                        </div>
                                        <img src="assets/img/icons/ios.svg" alt="icon" class="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="download__icon">
                                        <div class="icon-shape">
                                            <img src="assets/img/icons/download_icon_shape.svg" alt="icon">
                                        </div>
                                        <img src="assets/img/icons/android.svg" alt="icon" class="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="download__icon">
                                        <div class="icon-shape">
                                            <img src="assets/img/icons/download_icon_shape.svg" alt="icon">
                                        </div>
                                        <img src="assets/img/icons/pc.svg" alt="icon" class="icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="download__icon">
                                        <div class="icon-shape">
                                            <img src="assets/img/icons/download_icon_shape.svg" alt="icon">
                                        </div>
                                        <img src="assets/img/icons/web.svg" alt="icon" class="icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How does blockchain ensure transaction security?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Once a transaction is recorded in a block and added to the blockchain, it cannot be altered without consensus from the network, ensuring data integrity. Ensure that all participants agree on the validity of transac-tions before they are added to the blockchain.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How do you store cryptocurrencies securely?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Once a transaction is recorded in a block and added to the blockchain, it cannot be altered without consensus from the network, ensuring data integrity. Ensure that all participants agree on the validity of transac-tions before they are added to the blockchain.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What factors influence cryptocurrency price volatility?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Once a transaction is recorded in a block and added to the blockchain, it cannot be altered without consensus from the network, ensuring data integrity. Ensure that all participants agree on the validity of transac-tions before they are added to the blockchain.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            What are the benefits of decentralization?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Once a transaction is recorded in a block and added to the blockchain, it cannot be altered without consensus from the network, ensuring data integrity. Ensure that all participants agree on the validity of transac-tions before they are added to the blockchain.</p>
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
                                        <img src="assets/img/icons/btn_right_arrow.svg" alt="icon" class="right_arrow">
                                        <span>
                                            <img src="assets/img/icons/btn_icon_03.svg" alt="">
                                            submit now
                                        </span>
                                    </button>
                                </div>
                            </form>
                            <p class="ajax-response mb-0 text-center"></p>
                        </div>
                    </div>
                    <div class="contact__shape-wrap">
                        <img src="assets/img/images/contact_shape01.png" alt="img" class="alltuchtopdown">
                        <img src="assets/img/images/contact_shape02.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
@endsection
