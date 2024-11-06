
<div>
    <div class="main-panel bg-{{ $bg }}">
        <div class="content bg-{{ $bg }}">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    @if ($thisorder->status == 'pending')
                        <h1 class="title1 text-{{ $text }}">Make Payment and Confirm </h1>
                    @else
                        <h1 class="title1 text-{{ $text }} d-inline">Order Details</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                                <a class="btn btn-primary btn-sm" href="{{ route('p2pwindow') }}"> <i
                                        class="fa fa-arrow-left"></i> back</a>
                            </div>
                        </div>
                    @endif
                </div>
                <x-danger-alert />
                <x-success-alert />
                
                @if ($thisorder->status != 'completed')
                    @if($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY' and $thisorder->first_payment == 'completed')
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Hello {{ Auth::user()->name }}</h4>
                                <p class="text-dark">Counterparty have just made payment for this order.</p>
                                <hr>
                                <p class="mb-0 text-dark">Please confirm that you have receive your fund and released fund
                                    to counterpart. you can check the proof of payment.</p>
                            </div>
                            <div class="float-right btn-group">
                                <a class="btn btn-success btn-sm text-white" wire:click.prevent='showProof'>View Proof of Payment</a>
                            </div>
                        </div>
                    </div>
                    @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL' and $thisorder->first_payment == 'completed')
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Hello {{ Auth::user()->name }}</h4>
                                <p class="text-dark">Counterparty have just made payment for this order.</p>
                                <hr>
                                <p class="mb-0 text-dark">Please confirm that you have receive your fund and released fund
                                    to counterpart. you can check the proof of payment.</p>
                            </div>
                        </div>
                    </div>
                    @endif  
                @else
                    @if (!$viewProof)
                        <div class="row">
                            <div class="col-12">
                                <div class="float-right btn-group">
                                    <a class="btn btn-success btn-sm text-white" wire:click.prevent='showProof'>View Proof of Payment</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
                @if ($viewProof)
                  <div class="row">
                    <div class="col-12">
                       <img src="{{ asset('storage/app/public/'. $thisorder->screenshot) }}" alt="Prooft of Payment" class="img-fluid d-block">
                       <a class="btn btn-danger btn-sm text-white" wire:click.prevent='hideProof'>Hide Proof of Payment</a>
                    </div>
                </div>  
                @endif
                @if (!$viewProof)
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card bg-{{ $bg }}">
                            <div class="card-body">
                                <div class="form-row mb-2">
                                    <div class="col-4">
                                        <h4 class="text-danger">
                                            @if ($thisorder->payment_status == 'completed')
                                                Paid ({{ $thisorder->order }})
                                            @else
                                                @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                                    Pay Now
                                                @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                                    Release
                                                @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                                Release
                                                @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                                Pay Now
                                                @endif
                                                 ({{ $thisorder->order }})
                                            @endif
                                        </h4>
                                        <h2 class="mt-1 text-{{ $text }}">
                                            @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            @endif
                                        </h2>
                                        <small class="mt-1 text-{{ $text }}">Order ID
                                            #{{ $thisorder->order_id }}</small>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-{{ $text }}">Duration</h6>
                                        <button class="btn btn-darkbtn-border btn-round btn-sm mt-2">
                                            @if ($thisorder->payment_status == 'completed')
                                                00:00:00
                                            @else
                                                1 hour
                                            @endif

                                        </button>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="text-{{ $text }}">Transaction Status</h6>

                                        @if ($thisorder->status == 'pending')
                                            <span class="badge badge-danger">Pending</span>
                                        @else
                                            <span class="badge badge-success">Completed</span>
                                        @endif
                                    </div>
                                </div>
                                <hr class="mt-4 mb-2">

                                <div class="form-row mt-2 mb-2">
                                    <div class="col">
                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 class="">Counterparty Nick Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->buyer->nickname ? $thisorder->user->nickname : 'No Nickname set' }}
                                                </strong>
                                            </h6>
                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 class="">Counterparty Nick Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->advertizer->nickname }}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 class="">Counterparty Nick Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->buyer->nickname ? $thisorder->user->nickname : 'No Nickname set' }}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 class="">Counterparty Nick Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->advertizer->nickname }}
                                                </strong>
                                            </h6>
                                        @endif

                                    </div>
                                    <div class="col">
                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 class="">Counterparty Real Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->user->name }}
                                                </strong>
                                            </h6>
                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 class="">Counterparty Real Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ $thisorder->oUser->name }}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">Counterparty Real Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}"><strong
                                                    class="">{{ $thisorder->user->name }} </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">Counterparty Real Name</h6>
                                            <h6 class="mt-1 text-{{ $text }}"><strong
                                                    class="">{{ $thisorder->oUser->name }} </strong>
                                            </h6>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-row mt-2 mb-2">
                                    <div class="col-6">
                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 for="">You Send</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            </h6>
                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 for="">You Send</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">You Send</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">You Send</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            </h6>
                                        @endif


                                    </div>
                                    <div class="col-6">
                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 for="">You Receive</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            </h6>
                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                            <h6 for="">You Receive</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">You Receive</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>{{ number_format($thisorder->receive) }} {{$moresettings->local_currency}}
                                                </strong>
                                            </h6>
                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                            <h6 for="">You Receive</h6>
                                            <h6 class="mt-1 text-{{ $text }}">
                                                <strong>${{ number_format($thisorder->send) }}
                                                </strong>
                                            </h6>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-row mt-2 mb-2">
                                    <div class="col-6">
                                        <h6 for="">Rate</h6>
                                        <h6 class="mt-1 text-{{ $text }}"><strong>(1.00
                                                USD) = {{ $thisorder->advertizer->rate }} {{$moresettings->local_currency}}</strong>
                                        </h6>
                                    </div>
                                    <div class="col-6">
                                        <h6 for="">Date/Time</h6>
                                        <h6 class="mt-1 text-{{ $text }}"><strong>
                                                {{ $thisorder->created_at->toDayDateTimeString() }}
                                            </strong>
                                        </h6>
                                    </div>
                                </div>
                                <hr class="mt-4 mb-2">

                                <div class="form-row mt-2 mb-2">
                                    <div class="col-md-6">
                                        <div class="accordion accordion-light">
                                            <div class="card bg-{{ $bg }}">
                                                <div class="card-header" id="headingOne" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <div class="span-title">
                                                        
                                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                                            Counterparty Payment Details
                                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                                            My receiving account payment details
                                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                                        Counterparty Payment Details
                                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                                        My receiving account payment details
                                                        @endif
                                                        
                                                    </div>
                                                    <br>

                                                    <div class="span-mode">
                                                    </div>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-h6ledby="headingOne"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                                            Account Number:
                                                            <strong>{{ $thisorder->user->account_number }}</strong>
                                                            <br>
                                                            Bank Name:
                                                            <strong>{{ $thisorder->user->bank_name }}</strong>
                                                            <br>
                                                            Account Name:
                                                            <strong>{{ $thisorder->user->account_name }}</strong>
                                                            <br>
                                                            Swift Code:
                                                            <strong>{{ $thisorder->user->swift_code }}</strong>
                                                        @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                                            Account Number:
                                                            <strong>{{ $thisorder->user->account_number }}</strong>
                                                            <br>
                                                            Bank Name:
                                                            <strong>{{ $thisorder->user->bank_name }}</strong>
                                                            <br>
                                                            Account Name:
                                                            <strong>{{ $thisorder->user->account_name }}</strong>
                                                            <br>
                                                            Swift Code:
                                                            <strong>{{ $thisorder->user->swift_code }}</strong>
                                                        @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                                            Account Number:
                                                            <strong>{{ $thisorder->oUser->account_number }}</strong>
                                                            <br>
                                                            Bank Name:
                                                            <strong>{{ $thisorder->oUser->bank_name }}</strong>
                                                            <br>
                                                            Account Name:
                                                            <strong>{{ $thisorder->oUser->account_name }}</strong>
                                                            <br>
                                                            Swift Code:
                                                            <strong>{{ $thisorder->oUser->swift_code }}</strong>
                                                        @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                                            Account Number:
                                                            <strong>{{ $thisorder->oUser->account_number }}</strong>
                                                            <br>
                                                            Bank Name:
                                                            <strong>{{ $thisorder->oUser->bank_name }}</strong>
                                                            <br>
                                                            Account Name:
                                                            <strong>{{ $thisorder->oUser->account_name }}</strong>
                                                            <br>
                                                            Swift Code:
                                                            <strong>{{ $thisorder->oUser->swift_code }}</strong>
                                                        @endif
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6 class="text-{{ $text }}">Payment Status</h6>
                                        @if ($thisorder->payment_status == 'completed' and $thisorder->status == 'completed')
                                            <span class="badge badge-success">Completed</span>
                                        @else
                                            <span class="badge badge-danger">Pending</span>
                                            @if ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'BUY')
                                                <div class="mt-3">
                                                    @if ($thisorder->first_payment == 'completed')
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading">Well done!</h4>
                                                            <p>
                                                                Please let Counterparty know that you have made payment,
                                                                while you await confirmation. Your Fund will be released
                                                                to you once counterparty confirmed they have received
                                                                your payment.
                                                            </p>
                                                            <hr>
                                                            <p class="mb-0">We have also sent an email to
                                                                counterparty informing him of this transaction </p>
                                                        </div>
                                                    @else
                                                        <h6 class="text-{{ $text }}">Upload proof of payment
                                                        </h6>
                                                        <form wire:submit.prevent="savePayment">
                                                            <div class="form-group">
                                                                <input type="file" name="" id=""
                                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                                    wire:model="photo">
                                                                @error('photo')
                                                                    <span
                                                                        class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="checkbox" required>
                                                                <span class="text-danger">I confirm that i
                                                                    have sent the required fund to couterparty</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm">Confirm
                                                                    Payment</button>
                                                            </div>
                                                        </form>
                                                    @endif
                                                </div>
                                            @elseif($thisorder->receiver != Auth::user()->id and $thisorder->order == 'BUY')
                                                <form action="" wire:submit.prevent='releaseFund'>
                                                    <div class="form-group">
                                                        <h6 class="text-{{ $text }}">Release funds to Seller
                                                            {{ $thisorder->advertizer->nickname }}</h6>
                                                        <input type="checkbox" required>
                                                        <span class="text-danger">I confirm that i have
                                                            received my fund</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-danger">NOTE: Once you release fund, this
                                                            transaction will be marked as completed and you will not be
                                                            able to perform any other action. Be sure you have received
                                                            your fund before you release to counterparty.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm btn-block">Release
                                                            ${{ number_format($thisorder->send) }}</button>
                                                    </div>
                                                </form>
                                            @elseif ($thisorder->receiver == Auth::user()->id and $thisorder->order == 'SELL')
                                                <form action="" wire:submit.prevent='releaseFund'>
                                                    <div class="form-group">
                                                        <h6 class="text-{{ $text }}">Release funds to Buyer
                                                            {{ $thisorder->user->name }}</h6>
                                                        <input type="checkbox" required>
                                                        <span class="text-danger">I confirm that i have
                                                            received my fund</span>
                                                    </div>
                                                    <div>
                                                        <p class="text-danger">NOTE: Once you release fund, this
                                                            transaction will be marked as completed and you will not be
                                                            able to perform any other action. Be sure you have received
                                                            your fund before you release to counterparty.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm btn-block">Release
                                                            ${{ number_format($thisorder->send) }}</button>
                                                    </div>
                                                </form>
                                            @elseif ($thisorder->receiver != Auth::user()->id and $thisorder->order == 'SELL')
                                                <div class="mt-3">
                                                    @if ($thisorder->first_payment == 'completed')
                                                        <div class="alert alert-success" role="alert">
                                                            <h4 class="alert-heading">Well done!</h4>
                                                            <p>
                                                                Please let Counterparty know that you have made payment,
                                                                while you await confirmation. Your Fund will be released
                                                                to you once counterparty confirmed they have received
                                                                your payment.
                                                            </p>
                                                            <hr>
                                                            <p class="mb-0">We have also sent an email to
                                                                counterparty informing him of this transaction </p>
                                                        </div>
                                                    @else
                                                        <h6 class="text-{{ $text }}">Upload proof of payment
                                                        </h6>
                                                        <form wire:submit.prevent="savePayment">
                                                            <div class="form-group">
                                                                <input type="file" name="" id=""
                                                                    class="form-control text-{{ $text }} bg-{{ $bg }}"
                                                                    wire:model="photo">
                                                                @error('photo')
                                                                    <span
                                                                        class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="checkbox" required>
                                                                <span class="text-danger">I confirm that i
                                                                    have sent the required fund to couterparty</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-sm">Confirm
                                                                    Payment</button>
                                                            </div>
                                                        </form>
                                                    @endif
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <hr class="mt-4 mb-2">

                                <div class="form-row mt-2 mb-2">
                                    <div class="col-12">
                                        <h6 for="">Counterparty Contact
                                            Details</h6>
                                        <h6 class="mt-1 text-{{ $text }}">
                                            @if ($thisorder->receiver == Auth::user()->id )
                                            <strong>{{ $thisorder->user->phone }}</strong>
                                            @else
                                            <strong>{{ $thisorder->oUser->phone }}</strong>
                                            @endif
                                            
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
