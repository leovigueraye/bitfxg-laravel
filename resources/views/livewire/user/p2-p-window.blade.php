
<div>
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">{{ $settings->site_name }} P2P Transaction</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-{{ $bg }}">
                            <div class="card-body">
                                
                                <ul class="nav nav-tabs justify-content-center nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">
                                            <h4>BUY/SELL</h4>
                                            
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="orders-tab" data-toggle="tab" href="#orders"
                                            role="tab" aria-controls="orders" aria-selected="false">
                                            <h4>ORDERS</h4>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">
                                            <h4>MY ADS</h4>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">
                                            <h4>PROFILE</h4>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                              <a class="nav-link {{$type == 'BUY' ? 'active': ' '}}" href="#" wire:click.prevent="changeType('BUY')">BUY</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link {{$type == 'SELL' ? 'active': ' '}}" href="#" wire:click.prevent="changeType('SELL')" >SELL</a>
                                            </li>
                                            
                                        </ul>
                                        {{-- <div class="d-inline float-right">
                                                <input type="search" name="" id="" class="form-control text-{{$text}} bg-{{$bg}} float-right" placeholder="search by nickname" wire:model='searchvalue'>
                                            </div> --}}
                                        
                                        <div class="buy-sell-content">
                                            <div>
                                              @include('livewire.user.buy_sell.buysell')  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel"
                                        aria-labelledby="orders-tab">
                                        <livewire:user.user-orders-p2p />
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <livewire:user.ads-p2p />
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        @include('livewire.user.profile.profile-overview')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
