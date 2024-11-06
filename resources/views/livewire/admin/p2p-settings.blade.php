
<div>
    @if(Session::has('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-info-circle"></i> {{ Session::get('status') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" wire:submit.prevent='saveSettings'>
                <div class=" form-row">
                    <div class="mt-4 col-md-12">
                        <h5 class="text-{{$text}}">Allow Users to see and use P2P Module</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" name="p2p" value="true" class="selectgroup-input" {{$moresettings->enable_p2p == 'true' ? 'checked' : ''}} wire:click='enableModule()'>
                                <span class="selectgroup-button">On</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="p2p" {{$moresettings->enable_p2p != 'true' ? 'checked' : ''}} value="false" class="selectgroup-input" wire:click='disableModule()'>
                                <span class="selectgroup-button">Off</span>
                            </label>
                        </div>
                        <div>
                           <small class="text-{{$text}}">if turned off, Users will not be able to see and use P2P</small> 
                        </div>
                    </div>
                    
                    <div class="form-group col-md-6 facebook">
                        <h5 class="text-{{$text}}">Local Currency for P2P</h5>
                        <input type="text" name="site_name" class="form-control bg-{{$bg}} text-{{$text}}"  required wire:model='localCurrency'>
                        <small class="text-{{$text}}">This is the currency your users will be able to buy or sell.</small>
                    </div>
                    {{-- <div class="form-group col-md-6 facebook">
                        <h5 class="text-{{$text}}">Base Currency</h5>
                        <input type="text" name="site_name" class="form-control bg-{{$bg}} text-{{$text}}" required>
                        <small>your local currency will be valued based on this currency here, usually USD.</small>
                    </div> --}}
                    {{-- <div class="form-group col-md-6 facebook">
                        <h5 class="text-{{$text}}">Fees (%)</h5>
                        <input type="number" wire:model='commission' step="any" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$settings->site_name}}" required>
                        <small>Commision fee for orders</small>
                    </div> --}}
                    
                    <div class="form-group col-md-12">
                        <button type="submit" class="px-4 btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
   
</div>
