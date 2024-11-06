
<div>
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">Enter amount to {{ $order->type == 'SELL' ? 'Buy' : 'Sell' }}</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card bg-{{ $bg }}">
                            <div class="card-body">
                                <form wire:submit.prevent='createOrder'>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <h6 for="" class="text-{{ $text }}">
                                                {{ $order->type == 'SELL' ? 'Seller' : 'Buyer' }}</h6>
                                            <div class="alert bg-{{ $bg }}" role="alert">
                                                <strong
                                                    class="text-{{ $text }}">{{ $order->nickname }}</strong>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6 for="" class="text-{{ $text }}">Rate (1 USD)</h6>
                                            <div class="alert bg-{{ $bg }}" role="alert">
                                                <strong class="text-{{ $text }}">{{ $order->rate }}
                                                    {{$moresettings->local_currency}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-6">
                                            <h6 for="" class="text-{{ $text }}">Payment</h6>
                                            <div class="alert bg-{{ $bg }}" role="alert">
                                                <strong class="text-{{ $text }}">Bank
                                                    Transfer</strong>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h6 for="" class="text-{{ $text }}">{{ $order->type == 'SELL' ? 'Seller' : 'Buyer' }} Contact Details
                                            </h6>
                                            <div class="alert bg-{{ $bg }}" role="alert">
                                                <strong
                                                    class="text-{{ $text }}">{{ $order->user->phone }}</strong>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mb-2">
                                        <div class="col-12">
                                            <h6 for="" class="text-{{ $text }}">{{ $order->type == 'SELL' ? 'Seller' : 'Buyer' }}
                                                Instructions</h6>
                                            <div class="alert bg-{{ $bg }}" role="alert">
                                                <strong
                                                    class="text-{{ $text }}">{{ $order->user->instructions }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="">Amount</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <input type="number"
                                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                        placeholder="" aria-label="" aria-describedby="basic-addon1"
                                                        wire:model='amount'
                                                        min="{{ $order->min_limit }}"
                                                        max="{{ $order->max_limit }}"
                                                        wire:keyup='calculateQuantity'
                                                        >
                                                    <button class="btn btn-primary">USD</button>
                                                </div>
                                                <small class="mt-1 text-{{ $text }}">Limits:
                                                    {{ $order->min_limit }}
                                                    - {{ $order->max_limit }} USD
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="alert bg-{{ $bg }}">
                                                <h6 class="text-primary">
                                                    You'll {{ $order->type == 'SELL' ? 'Send' : 'Receive' }}</h6>
                                                <h6 class="mt-1 text-{{ $text }}">
                                                    <strong> {{number_format($quantity)}} {{$moresettings->local_currency}} </strong>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">
                                            <span wire:loading.remove wire:target='createOrder'>Confirm</span>
                                            <span wire:loading wire:target='createOrder'>Creating...</span>
                                        </button>
                                        <a href="{{route('p2pwindow')}}" class="btn btn-primary btn-border">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
