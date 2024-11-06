
@extends('layouts.app')
@section('content')
    @include('admin.nav')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{ $text }}">Active investment Plans</h1>
                </div>
                <x-danger-alert />
                <x-success-alert />
                <div class="col-12 card shadow p-4 bg-{{ Auth('admin')->User()->dashboard_style }}">
                    <div class="table-responsive" data-example-id="hoverable-table">
                        <table id="ShipTable" class="table table-hover text-{{ $text }}">
                            <thead>
                                <tr>
                                    <th>Client name</th>
                                    <th>Investment Plan</th>
                                    <th>Amount Invested</th>
                                    <th>Duration</th>
                                    <th>Last Growth</th>
                                    <th>Date created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plans as $plan)
                                    <tr>
                                        <td>{{ $plan->duser->name }}</td>
                                        <td>{{ $plan->dplan->name }}</td>
                                        <td>{{ $settings->currency }}{{ number_format($plan->amount) }}</td>
                                        <td>{{ $plan->inv_duration }}</td>
                                        <td>{{ \Carbon\Carbon::parse($plan->last_growth)->diffForHumans() }}</td>
                                        <td>{{ \Carbon\Carbon::parse($plan->created_at)->toDayDateTimeString() }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item text-danger" href="{{route('deleteplan', $plan->id)}}">Delete</a>
                                                    <a class="dropdown-item" href="{{ route('user.plans', $plan->duser->id) }}">More actions</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
