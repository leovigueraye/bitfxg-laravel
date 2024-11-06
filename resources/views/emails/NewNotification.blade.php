@component('mail::message')
# Hello {{ $recipient}},

@if ($attachment != null)
    <img src="{{ $message->embed(asset('storage/'. $attachment)) }}">
@endif
{!! $body !!}

{{-- @if ($url != null)
    @component('mail::button', ['url' => $url])
    Learn more
    @endcomponent
@endif --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
