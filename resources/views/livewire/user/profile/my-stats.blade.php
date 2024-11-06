
<div>
    <x-danger-alert />
    <x-success-alert />
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="p-3 card bg-{{ $bg }} shadow">
                <div class="d-flex align-items-center">
                    <span class="mr-3 stamp stamp-md bg-secondary">
                        <i class="fa fa-dollar-sign"></i>
                    </span>
                    <div>
                        <h5 class="mb-1 text-{{ $text }} d-inlne">
                            <b>{{ $settings->currency }}{{ number_format(Auth::user()->p2p_balance, 2, '.', ',') }}</b>
                        </h5>
                        <small class="text-muted ">P2P Balance</small>
                    </div>
                </div>
                @if (!$wantToTransfer)
                <hr>
                <a href="" class="btn btn-primary btn-sm" wire:click.prevent='trasnferYes'>
                    Transfer
                </a>
                @endif
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="p-3 card bg-{{ $bg }} shadow">
                <div class="d-flex align-items-center">
                    <span class="mr-3 stamp stamp-md bg-success">
                        <i class="fa fa-dollar-sign"></i>
                    </span>
                    <div>
                        <h5 class="mb-1 text-{{ $text }} d-inlne">
                            <b>{{ $settings->currency }}{{ number_format(Auth::user()->account_bal, 2, '.', ',') }}</b>
                        </h5>
                        <small class="text-muted ">Main Account Balance</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-{{ $bg }} shadow">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-chart-pie text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category text-{{ $text }}">Total
                                    Orders</p>
                                <h4 class="card-title text-{{ $text }}">{{ $orders }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-{{ $bg }} shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <div class="icon-big text-center">
                                <i class="flaticon-graph text-primary"></i>
                            </div>
                        </div>
                        <div class="col-7 col-stats">
                            <div class="numbers">
                                <p class="card-category text-{{ $text }}">Buy/Sell
                                    Rate
                                </p>
                                <h4 class="card-title text-{{ $text }}">
                                    {{ empty($buyad->rate) ? '0' : $buyad->rate }}/{{ empty($sellad->rate) ? '0' : $sellad->rate }}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($wantToTransfer)
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div>
                    <a href="" class="d-block text-right" wire:click.prevent='trasnferNo'>
                        <i class="fa fa-times text-danger fa-2x"></i>
                    </a>
                </div>
                <div class="p-3 card bg-{{ $bg }} shadow">
                    <div>
                        <p class="text-{{ $text }}">Transfer to and from your main account balance</p>
                    </div>
                    <form action="" method="post" wire:submit.prevent='transfer'>
                        <div class="form-group">
                            <h6 class="card-title text-{{ $text }}">Source Account</h6>
                            <select class="form-control text-{{ $text }} bg-{{ $bg }}" wire:model='source' wire:change='onChangeBalances'>
                                <option>P2P Account Balance</option>
                                <option>Main Account Balance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6 class="card-title text-{{ $text }}">Destination Account</h6>
                            <select class="form-control text-{{ $text }} bg-{{ $bg }}" wire:model='destination' wire:change='onChangeBalances'>
                                <option>Main Account Balance</option>
                                <option>P2P Account Balance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6 class="card-title text-{{ $text }}">Amount</h6>
                            <input wire:model.defer='amount'
                                class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                                required>
                        </div>
                        <div class=" form-group">
                            <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled" wire:target='transfer'>
                                <span class="" wire:loading wire:target='transfer'>Transfering...</span>
                                <span wire:loading.remove wire:target='transfer'>Transfer</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif


    <div class="row mt--2">
        
        {{-- <!--<div class="col-sm-6 col-md-3">-->
        <!--    <div class="card card-stats card-round bg-{{ $bg }} shadow">-->
        <!--        <div class="card-body ">-->
        <!--            <div class="row">-->
        <!--                <div class="col-5">-->
        <!--                    <div class="icon-big text-center">-->
        <!--                        <i class="flaticon-download text-success"></i>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-7 col-stats">-->
        <!--                    <div class="numbers">-->
        <!--                        <p class="card-category text-{{ $text }}">Buy Orders-->
        <!--                        </p>-->
        <!--                        <h4 class="card-title text-{{ $text }}">-->
        <!--                            {{ number_format($buys) }}-->
        <!--                        </h4>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-sm-6 col-md-3">-->
        <!--    <div class="card card-stats card-round bg-{{ $bg }} shadow">-->
        <!--        <div class="card-body">-->
        <!--            <div class="row">-->
        <!--                <div class="col-5">-->
        <!--                    <div class="icon-big text-center">-->
        <!--                        <i class="flaticon-upward text-danger"></i>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--                <div class="col-7 col-stats">-->
        <!--                    <div class="numbers">-->
        <!--                        <p class="card-category text-{{ $text }}">Sell Orders-->
        <!--                        </p>-->
        <!--                        <h4 class="card-title text-{{ $text }}">-->
        <!--                            {{ number_format($sells) }}-->
        <!--                        </h4>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>--> --}}
        
    </div>
</div>
