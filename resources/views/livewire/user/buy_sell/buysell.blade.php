<div class="row">
    <div class="col-md-12">
        @if (count($adverts) > 0)
            <div class="table-responsive">
                <table class="table table-striped text-{{ $text }}">
                    <thead>
                        <tr>
                            <th scope="col" class="text-bold">Advitisers</th>
                            <th scope="col">Limits</th>
                            <th scope="col">Rate(1 USD)</th>
                            <th scope="col">Payment Methods</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($adverts as $item)
                            <tr>
                                <td>
                                    <span class="rounded-circle bg-info p-2 text-white">
                                        {{ substr($item->nickname, 0, 2) }}
                                    </span> &nbsp;
                                    <span style="font-size: 17px" class="text-secondary">{{ $item->nickname }}</span>
                                    {{-- <span class="d-block">Completion rate: {{$item->completion_rate}}</span> --}}
                                </td>
                                <td>{{ $item->min_limit }}-{{ $item->max_limit }} {{ $item->base }}</td>
                                <td>{{ $item->rate }} {{ $item->quote }}</td>
                                <td>
                                    <span class="badge badge-primary">Bank Transfer</span>
                                </td>
                                <td>
                                    <a href="{{route('transact', $item->id)}}" class="btn btn-danger btn-sm">
                                        {{ $type == 'SELL' ? 'Buy USD' : 'Sell USD' }}
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="mt-5 text-center p-2">
                <i class="fas fa-clone fa-8x text-{{ $text }}"></i>
                <h3 class="text-{{ $text }}">No record found</h3>
            </div>
        @endif

    </div>
    <div class="col-md-12 mt-3 float-right">
        {{ $adverts->links() }}
    </div>
</div>
