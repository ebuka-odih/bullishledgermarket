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
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
  {
  "allow_symbol_change": true,
  "calendar": false,
  "details": false,
  "hide_side_toolbar": true,
  "hide_top_toolbar": false,
  "hide_legend": false,
  "hide_volume": false,
  "hotlist": false,
  "interval": "D",
  "locale": "en",
  "save_image": true,
  "style": "1",
  "symbol": "NASDAQ:AAPL",
  "theme": "dark",
  "timezone": "Etc/UTC",
  "backgroundColor": "#0F0F0F",
  "gridColor": "rgba(242, 242, 242, 0.06)",
  "watchlist": [],
  "withdateranges": false,
  "compareSymbols": [],
  "studies": [],
  "width": "100%",
  "height": 510
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
