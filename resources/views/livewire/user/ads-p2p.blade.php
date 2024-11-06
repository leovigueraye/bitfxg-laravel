
<div>
    
    <ul class="nav nav-pills" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="buyadd-tab" data-toggle="tab" href="#buyadd" role="tab"
                aria-controls="buyadd" aria-selected="false">Buy
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="sellad-tab" data-toggle="tab" href="#sellad" role="tab"
                aria-controls="sellad" aria-selected="false">Sell
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="buyadd" role="tabpanel" aria-labelledby="buyadd-tab">
            {{-- @include('livewire.user.ads.buyad') --}}
            <livewire:user.buy-add/>
        </div>

        <div class="tab-pane" id="sellad" role="tabpanel" aria-labelledby="sellad-tab">
            {{-- @include('livewire.user.ads.sellad') --}}
            <livewire:user.sell-add/>
        </div>
    </div>
    

    
   
</div>
