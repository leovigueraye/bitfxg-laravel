
<div>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner bg-{{ $bg }}">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">Award Transaction</h1>
                    <h4 class="text-{{$text}}">Award Transaction to either counterparty in case of dispute</h4>
                </div>
                <x-danger-alert />
                <x-success-alert />

                <div class="mb-5 row">
                    <div class="col-md-12 ">
                        <div class="card shadow bg-{{ $bg }} p-1 p-md-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3 card bg-{{ $bg }} shadow">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3 stamp stamp-md bg-secondary">
                                                    <i class="fa fa-dollar-sign"></i>
                                                </span>
                                                <div>
                                                    <h5 class="mb-1 text-{{ $text }} d-inlne">
                                                        <b>${{number_format($order->user->p2p_balance, 2, '.', ',') }}</b>
                                                    </h5>
                                                    <small class="text-muted ">{{$order->user->name}} P2P Balance</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 card bg-{{ $bg }} shadow">
                                            <div class="d-flex align-items-center">
                                                <span class="mr-3 stamp stamp-md bg-secondary">
                                                    <i class="fa fa-dollar-sign"></i>
                                                </span>
                                                <div>
                                                    <h5 class="mb-1 text-{{ $text }} d-inlne">
                                                        <b>${{number_format($order->oUser->p2p_balance, 2, '.', ',') }}</b>
                                                    </h5>
                                                    <small class="text-muted ">{{$order->oUser->name}} P2P Balance</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        
                                        <div>
                                            <form action="" method="post" wire:submit.prevent='award'>
                                                <div class=" form-row">
                                                    <div class="form-group col-md-6 facebook">
                                                        <h5 class="text-{{$text}}">Select User</h5>
                                                        <select class="form-control bg-{{$bg}} text-{{$text}}"  required wire:model='user'>
                                                            <option></option>
                                                            <option value="{{$order->user->id}}">{{$order->user->name}}</option>
                                                            <option value="{{$order->oUser->id}}">{{$order->oUser->name}}</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6 facebook">
                                                        <h5 class="text-{{$text}}">Type</h5>
                                                        <select class="form-control bg-{{$bg}} text-{{$text}}"  required wire:model='type'>
                                                            <option>Credit</option>
                                                            <option>Debit</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-6 facebook">
                                                        <h5 class="text-{{$text}}">Amount</h5>
                                                        <input type="number" wire:model='amount' step="any" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                                        <small class="text-{{$text}}">Amount to award to user: this amount will go to users P2P Balance.</small>
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <button type="submit" class="px-4 btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </form>
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

</div>
