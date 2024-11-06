<div class="row">
    
    <div class="col-md-8 offset-md-2">
        <form action="javascript:void(0)" method="POST" id="trasfer">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="selectgroup">
                    <label class="selectgroup-item">
                        <input type="radio" name="usertransfer" value="1" class="selectgroup-input" {{$moresettings->use_transfer ? 'checked' : ''}}>
                        <span class="selectgroup-button">On</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="usertransfer" value="0" class="selectgroup-input" {{$moresettings->use_transfer ? '' : 'checked'}}>
                        <span class="selectgroup-button">Off</span>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <h5 class="text-{{$text}}">Minimum Transfer Amount ({{$settings->currency}})</h5>
                <input type="number" name="min_transfer" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$moresettings->min_transfer}}">
            </div>
            <div class="form-group">
                <h5 class="text-{{$text}}">Charges(%)</h5>
                <input type="number" name="charges" class="form-control bg-{{$bg}} text-{{$text}}" value="{{$moresettings->transfer_charges}}">
                <small  class="text-{{$text}}">Enter 0 if you don't want any charges</small>
            </div>
            
            <div class="form-group col-md-6">
                <button type="submit" class="px-4 btn btn-primary">Save Settings</button>
            </div> 
        </form>
    </div>
</div>