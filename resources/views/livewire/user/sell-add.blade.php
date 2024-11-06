
<div>
    <x-danger-alert />
    <x-success-alert />
    @if (!$sellAd)
        <div class="mt-5 text-center p-2">
            <i class="fas fa-clone fa-8x text-{{ $text }}"></i>
            <h3 class="text-{{ $text }}">You have no ad yet</h3>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#createaddsell">Create Sell Ad</a>
            <!-- create ad modal -->
            <div id="createaddsell" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-{{ $bg }}">
                            <h4 class="modal-title text-{{ $text }}">Create Sell Ad</h4>
                            <button type="button" class="close text-{{ $text }}"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-{{ $bg }} text-left">
                            <form action="" method="post" wire:submit.prevent='createSellAd'>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Nickname</h6>
                                    <input wire:model.defer='sellnickname'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        placeholder="Enter nickname without space" type="text" required>
                                    <small class="text-secondary">this name will be displayed in the advert page for
                                        sell ads</small>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Minimum Limit($)</h6>
                                    <input wire:model.defer='sellmin'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Maximum Limit($)</h6>
                                    <input wire:model.defer='sellmax'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">1 USD($) = how many {{$moresettings->local_currency}}</h6>
                                    <input wire:model.defer='sellrate'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class=" form-group">
                                    <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled"
                                        wire:target='createSellAd'>
                                        <span class="" wire:loading
                                            wire:target='createSellAd'>Creating...</span>
                                        <span wire:loading.remove wire:target='createSellAd'>Create</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /send all users email Modal -->
        </div>
    @else
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="" method="post" wire:submit.prevent='updateSellAd'>
                    <div class="mt-4 col-md-6">

                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" wire:click="changeSellStatus('active')" class="selectgroup-input"
                                    {{ $sellstatus == 'active' ? 'checked' : '' }}>
                                <span class="selectgroup-button">Publish</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" {{ $sellstatus != 'active' ? 'checked' : '' }} value="inactive"
                                    class="selectgroup-input" wire:click="changeSellStatus('inactive')">
                                <span class="selectgroup-button">Don't Publish</span>
                            </label>
                        </div>
                        <div>
                            <small class="text-{{ $text }}">Buyers can see your ad when it's published</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Nickname</h6>
                        <input wire:model.defer='sellnick'
                            class="form-control text-{{ $text }} bg-{{ $bg }}"
                            placeholder="Enter nickname without space" type="text" required>
                        <small class="text-secondary">this name will be displayed in the advert page</small>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Minimum Limit($)</h6>
                        <input wire:model.defer='sellmini'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Maximum Limit($)</h6>
                        <input wire:model.defer='sellmaxi'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">1 USD($) = how many {{$moresettings->local_currency}}</h6>
                        <input wire:model.defer='sellrateup'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>

                    <div class=" form-group">
                        <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled"
                            wire:target='updateSellAd'>
                            <span class="" wire:loading wire:target='updateSellAd'>Updating...</span>
                            <span wire:loading.remove wire:target='updateSellAd'>Update</span>
                        </button>
                        &nbsp;&nbsp;
                    </div>
                </form>
                
            </div>
        </div>
    @endif

</div>
