@component('mail::message')
# Hello {{$foramin  ? 'Admin' : $user->name}}

@if ($foramin)
    This is to inform you of a successfull Deposit of {{$settings->currency.$deposit->amount}} from {{$user->name}}, please login to process it.
    
@else
    @if ($deposit->status == 'Processed')
    This is to inform you that your deposit of {{$settings->currency.$deposit->amount}} have been received and confirmed. <br>
    Your account balance is now: {{$settings->currency.$user->account_bal}}
    @else
    This is to inform you that your deposit of {{$settings->currency.$deposit->amount}} is successfull, please wait while we confirm your deposit. You will receive a notification regarding the status of this transation.
    @endif
        
@endif
Thanks,<br>
{{ config('app.name') }}
@endcomponent
