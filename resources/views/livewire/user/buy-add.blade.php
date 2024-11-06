
<div>
    <x-danger-alert />
    <x-success-alert />
    @if (!$buyAd)
        <div class="mt-5 text-center p-2">
            <i class="fas fa-clone fa-8x text-{{ $text }}"></i>
            <h3 class="text-{{ $text }}">You have no ad yet</h3>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#createaddbuy">Create Buy Ad</a>
            <!-- create ad modal -->
            <div id="createaddbuy" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-{{ $bg }}">
                            <h4 class="modal-title text-{{ $text }}">Create Buy Ad</h4>
                            <button type="button" class="close text-{{ $text }}"
                                data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body bg-{{ $bg }} text-left">
                            <form action="" method="post" wire:submit.prevent='createBuyAd'>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Nickname</h6>
                                    <input wire:model.defer='nickname'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        placeholder="Enter nickname without space" type="text" required>
                                    <small class="text-secondary">this name will be displayed in the advert page for buy
                                        ads</small>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Minimum Limit($)</h6>
                                    <input wire:model.defer='minimum'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">Maximum Limit($)</h6>
                                    <input wire:model.defer='maximum'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class="form-group">
                                    <h6 class="card-title text-{{ $text }}">1 USD($) = how many {{$moresettings->local_currency}}</h6>
                                    <input wire:model.defer='rate'
                                        class="form-control text-{{ $text }} bg-{{ $bg }}"
                                        type="number" required>
                                </div>
                                <div class=" form-group">
                                    <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled"
                                        wire:target='createBuyAd'>
                                        <span class="" wire:loading
                                            wire:target='createBuyAd'>Creating...</span>
                                        <span wire:loading.remove wire:target='createBuyAd'>Create</span>
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
                <form action="" method="post" wire:submit.prevent='updateBuyAd'>
                    <div class="mt-4 col-md-6">

                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" wire:click="changeStatus('active')" class="selectgroup-input"
                                    {{ $status == 'active' ? 'checked' : '' }}>
                                <span class="selectgroup-button">Publish</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" {{ $status != 'active' ? 'checked' : '' }} value="inactive"
                                    class="selectgroup-input" wire:click="changeStatus('inactive')">
                                <span class="selectgroup-button">Don't Publish</span>
                            </label>
                        </div>
                        <div>
                            <small class="text-{{ $text }}">Sellers can see your ad when it's published</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Nickname</h6>
                        <input wire:model.defer='nicknamep'
                            class="form-control text-{{ $text }} bg-{{ $bg }}"
                            placeholder="Enter nickname without space" type="text" required>
                        <small class="text-secondary">this name will be displayed in the advert page</small>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Minimum Limit($)</h6>
                        <input wire:model.defer='minimump'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">Maximum Limit($)</h6>
                        <input wire:model.defer='maximump'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>
                    <div class="form-group">
                        <h6 class="card-title text-{{ $text }}">1 USD($) = how many {{$moresettings->local_currency}}</h6>
                        <input wire:model.defer='ratep'
                            class="form-control text-{{ $text }} bg-{{ $bg }}" type="number"
                            required>
                    </div>

                    <div class=" form-group">
                        <button type="submit" class="btn btn-secondary" wire:loading.attr="disabled"
                            wire:target='updateBuyAd'>
                            <span class="" wire:loading wire:target='updateBuyAd'>Updating...</span>
                            <span wire:loading.remove wire:target='updateBuyAd'>Update</span>
                        </button>
                        &nbsp;&nbsp;

                    </div>
                </form>
                
            </div>
        </div>
    @endif

</div>
