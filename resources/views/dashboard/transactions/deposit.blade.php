@extends('dashboard.layout.app')
@section('content')
    <style>
        .payment-grid {
            display: grid;
            grid-template-columns: 1fr 2fr 3fr 2fr;
            grid-gap: 10px;
            width: 100%;
        }

        .payment-grid-header, .payment-grid-row {
            display: contents;
        }

        .payment-grid div {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .payment-grid-header div {
            font-weight: bold;
        }

        .payment-grid-row div {
            padding: 10px;
        }

        .payment-grid-row:last-child div {
            border-bottom: none;
        }

    </style>

    <div class="settings mtb15">
        <div class="container">
            <h3 class="text-center">Deposit</h3>
            <div class="row mt-4">
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
                <div class="col-md-5 py-3">
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="mb-0">Choose Method</h4>
                        </div>
                        <div class="card-body p-2">
                            @forelse($wallets as $item)
                                <div id="accordion">
                                    <div class="card my-2">
                                        <div class="card-header">
                                            <a class="card-link d-flex align-items-center text-black collapsed"
                                               data-toggle="collapse" href="#collapse-{{ $item->id }}"
                                               aria-expanded="false">
                                                <div class="mr-2">
                                                    <img src="{{  asset('storage/'.$item->avatar ?? '/img/wallet.png') }}"
                                                         style="width: 30px; border-radius: 50%">
                                                </div>
                                                <div class="text-capitalize text-black">{{ $item->wallet }}</div>
                                            </a>
                                        </div>
                                        <div id="collapse-{{ $item->id }}" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <h5>Address</h5>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="wallet-{{ $item->id }}"
                                                           value="{{ $item->address }}" readonly>
                                                </div>
                                                <button class="btn btn-primary btn-block"
                                                        onclick="copyFunction('{{ $item->id }}')">Tap to copy address
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Toast notification -->
                                <div id="toast-{{ $item->id }}"
                                     style="display: none; position: absolute; top: 20px; right: 20px; background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; margin: 10px">
                                    Address copied to clipboard!
                                </div>
                            @empty
                                <h5 class="m-2">No Deposit Wallet</h5>
                            @endforelse


                        </div>
                    </div>
                </div>
                <div class="col-md-7 py-3">
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="mb-0">Deposit Instructions</h4>
                        </div>
                        <div class="card-body px-3 py-5">
                            <form action="{{ route('user.payment') }}" method="POST" enctype="multipart/form-data"
                                  class="mx-auto" style="max-width: 360px">
                                @csrf
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <p>
                                    To deposit, choose your preferred payment method and send only to the wallet address shown on your screen.
                                    <br>
                                    ⚠️ Deposits made without uploading proof of payment may experience delays in processing.
                                </p>
                                <div class="form-group">
                                    <label>Method</label>
                                    <select name="payment_method_id" class="custom-select" id="">
                                        @foreach($wallets as $item)
                                            <option value="{{ $item->id }}">{{ $item->wallet }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control" required="">
                                </div>
                                <label>Payment Proof</label>
                                <div class="custom-file mb-3">
                                    <input type="file" name="proof" class="custom-file-input" id="customFile"
                                           required="">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <button class="btn btn-success btn-block">Submit Deposit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 py-3">
                    <div class="card my-2">
                        <div class="card-header">
                            <h4 class="mb-0">Deposits History</h4>
                        </div>
                        <div class="card-body px-3 py-5">
                            <div class="payment-grid">
                                <div class="payment-grid-header">
                                    <div>#</div>
                                    <div>Amount</div>
                                    <div>Payment Method</div>
                                    <div>Status</div>
                                </div>

                                @foreach($deposits as $index => $item)
                                    <div class="payment-grid-row">
                                        <div>{{ $index+1 }}</div>
                                        <div>${{ number_format($item->amount, 2) ?? '' }}</div>
                                        <div>{{ optional($item->payment_method)->wallet ?? '' }}</div>
                                        <div>
{{--                                            {!! $item->status() !!}--}}
                                            @if($item->status == 0)
                                                <span class="badge bg-warning text-white">Pending</span>
                                            @else
                                                <span class="badge bg-success text-white">Successful</span>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById("customFile").addEventListener("change", function () {
            var fileName = this.files[0].name;

            var label = this.nextElementSibling;
            label.textContent = fileName;
        });
    </script>


    <script>
        function copyFunction(walletId) {
            // Get the address value of the specific wallet
            const address = document.getElementById(`wallet-${walletId}`).value;

            // Create a temporary textarea to copy the text
            const tempTextArea = document.createElement("textarea");
            tempTextArea.value = address;
            document.body.appendChild(tempTextArea);
            tempTextArea.select();
            document.execCommand("copy");
            document.body.removeChild(tempTextArea);

            // Show the specific toast notification for that wallet
            const toast = document.getElementById(`toast-${walletId}`);
            toast.style.display = "block";

            // Hide the toast after 3 seconds
            setTimeout(() => {
                toast.style.display = "none";
            }, 3000);
        }
    </script>

@endsection
