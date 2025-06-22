@extends('dashboard.layout.app')
@section('content')
     <style>
    .payment-grid {
        display: grid;
        grid-template-columns: 2fr 2fr 2fr 2fr 2fr;
        grid-gap: 10px;
        width: 100%;
    }

    .payment-grid-header, .payment-grid-row {
        display: contents;
    }

    .payment-grid div {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    .payment-grid-header div {
        font-weight: bold;
        text-align: center;
    }

    .payment-grid-row div {
        padding: 10px;
    }

    .payment-grid-row:last-child div {
        border-bottom: none;
    }

    .badge {
        padding: 0.3rem 0.6rem;
        font-size: 0.875rem;
    }

    .nav-tabs {
        border-bottom: 2px solid #dee2e6;
        margin-bottom: 30px;
    }

    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        font-weight: 500;
        padding: 12px 24px;
        margin-right: 5px;
        border-radius: 8px 8px 0 0;
        transition: all 0.3s ease;
    }

    .nav-tabs .nav-link:hover {
        color: #495057;
        background-color: #f8f9fa;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active {
        color: #fff;
        background-color: #6c6cf3;
        border-color: #6c6cf3;
    }

    .tab-content {
        padding-top: 20px;
    }

    .landing-feature-item {
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .landing-feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .card {
        margin-bottom: 30px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        border: none;
        border-radius: 12px;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        border-radius: 12px 12px 0 0 !important;
        padding: 20px;
    }

    .card-body {
        padding: 25px;
    }
</style>
     <style>
          .icon {
              color: #3030da;
          }
          li {
              margin-top: 10px
          }
      </style>

    <div class="container">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i style="color: #6c6cf3; font-size: 30px" class="icon ion-md-cash"></i> Main Balance</h5>
                    <div>
                        <h5>
                            <small>USD</small><strong> {{ number_format($user->balance, 2) }}</strong>
                        </h5>

                         <h5>
                             <small>BTC</small><strong id="btc-balance"> {{ $user->balance }}</strong>
                         </h5>
                    </div>
                </div>
            </div>
        </div>
        
        <h2 class="text-center m-3">AI Trading</h2>
        
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="aiTraderTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="traders-tab" data-toggle="tab" href="#traders" role="tab" aria-controls="traders" aria-selected="true">
                    <i class="icon ion-md-people mr-2"></i> AI Traders
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">
                    <i class="icon ion-md-time mr-2"></i> History
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="aiTraderTabContent">
            <!-- AI Traders Tab -->
            <div class="tab-pane fade show active" id="traders" role="tabpanel" aria-labelledby="traders-tab">
                <div class="row">
                    @foreach($botTraders as $item)
                         <div class="col-md-4 mb-4">
                          <div style="border: 1px solid green" class="landing-feature-item">
                              <div class="d-flex flex-column align-items-center text-center">
                                <img style="border-radius: 50%; height: 70px; width: 70px" src="{{ asset('storage/' . $item->avatar) }}" alt="">
                                <h3 class="mt-0"><strong>{{ $item->name }}</strong></h3>
                            </div>

                              <hr>

                            <div class="cad">
                                <div class="text-center m-3">
                                    <h4><strong class="text-primary text-center">${{ $item->min_amount }}</strong>/<small>Min</small></h4>
                                </div>
                                <div class="card-body">
                                 <ul >
                                    <li><i class="icon ion-ios-checkmark-circle"></i> Win Rate: <span class="badge badge-sm bg-secondary text-white">{{ $item->rate }}%</span></li>
                                    <li><i class="icon ion-ios-checkmark-circle"></i> Duration: <span class="badge badge-sm bg-secondary text-white">{{ $item->duration ?? 'N/A' }} days</span></li>
                                    <li><i class="icon ion-ios-checkmark-circle"></i> Win: <span class="badge badge-sm bg-success text-white">{{ $item->win }}</span></li>
                                    <li><i class="icon ion-ios-checkmark-circle"></i> Loss: <span class="badge bg-danger text-white">{{ $item->loss }}</span></li>
                                  </ul>
                                    <form action="{{ route('user.aiTrader.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="bot_trader_id" value="{{ $item->id }}">
                                        <input type="hidden" name="amount" value="{{ $item->min_amount }}">

                                        <button class="btn btn-primary btn-block submit-with mt-3" type="submit">Activate AI Trader</button>
                                    </form>
                                </div>
                            </div>
                          </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- History Tab -->
            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">AI Trading History</h4>
                            </div>
                            <div class="card-body px-3 py-3">

                                 <div class="payment-grid">
                                        <div class="payment-grid-header">
                                            <div>Date</div>
                                            <div>Amount</div>
                                            <div>AI Trader</div>
                                            <div>Status</div>
                                            <div>Duration</div>
                                        </div>

                                        @foreach($subBotTraders as $index => $item)
                                            <div class="payment-grid-row">
                                                <div>{{ date('d M, Y', strtotime($item->created_at)) }}</div>
                                                <div>${{ number_format($item->amount, 2) ?? '' }}</div>
                                                <div>{{ $item->botTrader->name ?? '' }}</div>
                                                <div>
                                                    @if($item->status == 0)
                                                        <span class="badge bg-warning text-white">Pending</span>
                                                    @elseif($item->status == 1)
                                                        <span class="badge bg-success text-white">Active</span>
                                                    @else
                                                        <span class="badge bg-danger text-white">Inactive</span>
                                                    @endif
                                                </div>
                                                <div>
                                                    @if($item->botTrader && $item->botTrader->duration)
                                                        {{ $item->botTrader->duration }} days
                                                    @else
                                                        N/A
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach

                                        @if($subBotTraders->isEmpty())
                                            <div class="payment-grid-row">
                                                <div colspan="5" class="text-center py-4">
                                                    <p class="text-muted">No AI trading history found.</p>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function switchToHistoryTab() {
            // Switch to history tab using Bootstrap 4 syntax
            $('#history-tab').tab('show');
        }

        // Initialize tabs on page load
        $(document).ready(function() {
            // Bootstrap 4 tab initialization
            $('#aiTraderTabs a').on('click', function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>

@endsection 