
<div>
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ $ordersStatus == 'pending' ? 'active' : ' ' }}" href="#"
                wire:click.prevent="changeStatus('pending')">Active orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $ordersStatus == 'completed' ? 'active' : ' ' }}" href="#"
                wire:click.prevent="changeStatus('completed')">Completed orders</a>
        </li>
    </ul>
    <div class="row">
        <div class="col-md-12">
            @if (count($orders) > 0)
                <div class="table-responsive">
                    <table class="table table-striped text-{{ $text }}">
                        <thead>
                            <tr>
                                <th scope="col" class="text-bold">Order</th>
                                <th scope="col">OrderId</th>
                                <th scope="col">Counterparty</th>
                                <th scope="col">Transaction Status</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Send</th>
                                <th scope="col">Receive</th>
                                <th scope="col">DateTime</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                @if ($item->user_id == Auth::user()->id || $item->receiver == Auth::user()->id)
                                    <tr>
                                        <td>
                                            {{ $item->order }}
                                        </td>
                                        <td>#{{ $item->order_id }}</td>
                                        <td>
                                            @if ($item->receiver == Auth::user()->id)
                                                {{$item->user->name}}
                                            @else
                                                {{$item->oUser->name}}
                                            @endif
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
                                            @if ($item->receiver == Auth::user()->id and $item->order == "BUY")
                                                {{ number_format($item->receive)}} {{$moresettings->local_currency}}
                                            @else
                                                ${{ number_format($item->send) }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->receiver == Auth::user()->id and $item->order == "BUY")
                                                ${{ $item->send }}
                                            @else
                                            {{ $item->receive }} {{$moresettings->local_currency}}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->created_at->toDateTimeString() }}
                                        </td>
                                        <td>
                                            @if ($item->first_payment != 'completed')
                                              <a href="#" class="btn btn-sm btn-danger m-1" wire:click.prevent="deleteOrder({{$item->id}})">Delete</a>  
                                            @endif
                                            <a href="{{route('payorder', $item->id)}}" class="btn btn-sm btn-info m-1">View</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="mt-5 text-center p-2">
                    <i class="fas fa-clone fa-8x text-{{ $text }}"></i>
                    <h3 class="text-{{ $text }}">No orders found</h3>
                </div>
            @endif

        </div>
        <div class="col-md-12 mt-3 float-right">
            {{ $orders->links() }}
        </div>
    </div>
</div>
