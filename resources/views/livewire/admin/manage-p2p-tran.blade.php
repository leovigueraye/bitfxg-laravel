
<div>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">All P2P Orders</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />

                <div class="mb-5 row">
                    <div class="col-md-12 ">
                        <div class="card shadow p-4 bg-{{ $bg }}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex pe-0">
                                        <div>
                                            <form>
                                                <div class="input-group">
                                                    <input wire:model.debounce.500ms='searchvalue' class="form-control form-control-sm shadow-none search bg-{{ $bg }} text-{{ $text }}" type="search" placeholder="order_id" aria-label="search" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped text-{{ $text }}">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-bold">Order</th>
                                                    <th scope="col">OrderId</th>
                                                    <th scope="col">Ad Owner</th>
                                                    <th scope="col">Counterparty</th>
                                                    <th scope="col">Transaction Status</th>
                                                    <th scope="col">Payment Status</th>
                                                    <th scope="col">Owner Sent</th>
                                                    <th scope="col">Owner Received</th>
                                                    <th scope="col">DateTime</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td>
                                                            {{ $item->order }}
                                                        </td>
                                                        <td>#{{ $item->order_id }}</td>
                                                        <td>
                                                            {{$item->oUser->name}}
                                                        </td>
                                                        <td>
                                                            {{$item->user->name}}
                                                        </td>
                                                        <td>
                                                            @if ($item->status != 'completed')
                                                                <span class="badge badge-danger">Pending</span>
                                                            @else
                                                                <span class="badge badge-success">Completed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->payment_status != 'completed')
                                                                <span class="badge badge-danger">Pending</span>
                                                            @else
                                                                <span class="badge badge-success">Completed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->order == "BUY")
                                                                {{ number_format($item->receive) }} {{$moresettings->local_currency}}
                                                            @else
                                                                ${{ number_format($item->send) }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->order == "BUY")
                                                                ${{ number_format($item->send) }}
                                                            @else
                                                            {{ number_format($item->receive) }} {{$moresettings->local_currency}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $item->created_at->toDateTimeString() }}
                                                        </td>
                                                        <td>
                                                            <a href="#" class="btn btn-sm btn-danger m-1" wire:click.prevent="deleteOrder({{$item->id}})">Delete</a> 

                                                            <a href="{{route('awrdtran', $item->id)}}" class="btn btn-sm btn-warning m-1">Award</a>

                                                        </td>

                                                    </tr>
                                                    {{-- <tr>
                                                        <td colspan="10">
                                                            <div>

                                                            </div>
                                                        </td>
                                                    </tr> --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>  
                                </div>
                                
                            </div>
                            <div class="card-footer bg-{{$bg}} py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        {!!$orders->links()!!}
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
