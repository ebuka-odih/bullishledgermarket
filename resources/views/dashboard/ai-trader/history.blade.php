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
        
        <h2 class="text-center m-3">AI Trading History</h2>
        
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

        <div class="row">
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Complete AI Trading History</h4>
                        <a href="{{ route('user.aiTrader.index') }}" class="btn btn-primary">
                            <i class="icon ion-md-arrow-back mr-2"></i>Back to AI Traders
                        </a>
                    </div>
                    <div class="card-body">

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
                                            <a href="{{ route('user.aiTrader.index') }}" class="btn btn-primary mt-3">
                                                <i class="icon ion-md-people mr-2"></i>Browse AI Traders
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 