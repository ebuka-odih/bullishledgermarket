@extends('pages.layout.app')
@section('content')


    <main style="margin-top: 200px;" class="main-area fix">
        <h4 class="text-center">Cryptocurrency Market</h4>


        <!-- contact-area -->
        <section id="contact" class="contact__area">
            <div class="container">
                <div class="_inner-wrap">
                    <div class="row justify-content-center">
                        <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
              "width": "100%",
              "height": 550,
              "defaultColumn": "overview",
              "screener_type": "crypto_mkt",
              "displayCurrency": "USD",
              "colorTheme": "dark",
              "locale": "en"
            }
              </script>
            </div>
            <!-- TradingView Widget END -->
                    </div>

                </div>
            </div>
        </section>
        <!-- contact-area-end -->



    </main>
@endsection
