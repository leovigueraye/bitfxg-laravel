
<div>
    <x-danger-alert />
    <x-success-alert />
    <form action="" method="post" wire:submit.prevent='saveInformation'>
        <div class=" mt-4 mb-2">
            <h5>Contact Details</h5>
            <div class="form-group">
                <h6 for="comment" class="text-{{ $text }} bg-{{ $bg }} d-block">Phone-Number</h6>
                @if (empty(Auth::user()->phone))
                <a href="{{route('profile')}}" class="btn btn-danger mt-3 text-white">Set-up Phone Number
                </a>
                @else
                <input type="number" name="" class="form-control text-{{ $text }} bg-{{ $bg }}" id="" wire:model='phoneNumber'>
                @endif
            </div>
        </div>
        <div class="mt-4">
            <div class="form-group">
                <h6 for="comment" class="text-{{ $text }} bg-{{ $bg }}">Instructions</h6>

                <textarea class="form-control text-{{ $text }} bg-{{ $bg }}" placeholder="Instructions" wire:model='instructions'>

                </textarea>
                <p class="text-mute text-{{ $text }} bg-{{ $bg }}">This information will be visible to
                    everyone
                </p>
            </div>
            <div class="text-right">
                <button class="btn btn-success mr-3" type="submit">Submit</button>
                {{-- <button class="btn btn-danger">Cancel</button> --}}
            </div>
        </div>
    </form>
    
</div>
