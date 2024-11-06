
@extends('layouts.app')
@section('content')
    @include('admin.nav')    
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2">
                    <h1 class="title1 text-{{ $text }}">Manage leads </h1>
                    <p class="text-{{$text}}">Leads are simply new users that have not engaged with your platform. That is, they have not deposited, or even bought an investment plan. You can follow them up to get them to engage. </p>
                </div>
                <x-danger-alert />
                <x-success-alert />

                <div class="mb-3 row">
                    <div class="col">
                        <a href="#" data-toggle="modal" data-target="#assignModal" class="btn btn-primary">Assign</a>
                        <!-- Assign Modal -->
                        <div id="assignModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }}">
                                        <h4 class="modal-title text-{{ $text }}">Assign users to admin for follow up</h4>
                                        <button type="button" class="close text-{{ $text }}"
                                            data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                                        <form role="form" method="post"
                                            action="{{ route('assignuser') }}">
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Select User to Assign</h5>
                                                <select name="user_name" id=""
                                                    class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }} select2 w-100" style="width:100%">
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }} ">{{ $user->name }}
                                                            {{ $user->l_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h5 class="text-{{ $text }}">Select Admin to assign this user to.
                                                </h5>
                                                <select name="admin" id=""
                                                    class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}">
                                                    <option value="">Select</option>
                                                    @foreach ($admin as $user)
                                                        <option value="{{ $user->id }}">{{ $user->firstName }}
                                                            {{ $user->lastName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-{{ $text }}" value="Assign">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Assign Modal end -->
                        <a>
                            <form action="{{ route('fileImport') }}" class="form-inline" method="POST"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <h5 class="text-{{ $text }}">Import Leads from Excel</h5> &nbsp; &nbsp;
                                    <input name="file"
                                        class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                        type="file" required>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </a>
                        <span>
                            <a href="{{route('downlddoc')}}" class="btn btn-sm btn-info">download sample document</a>
                        </span>
                    </div>
                </div>
                <div class="mb-5 row">
                    <div class="col-lg-12 card p-4 bg-{{ Auth('admin')->User()->dashboard_style }} shadow">
                        <div class="table-responsive" data-example-id="hoverable-table">
                            <table id="ShipTable" class="table table-hover text-{{ $text }}">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Date registered</th>
                                        <th>Assigned To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $list)
                                        <tr>
                                            <td>{{ $list->name }}</td>
                                            <td>{{ $list->email }}</td>
                                            <td>{{ $list->phone }}</td>
                                            <td>{{ $list->status }}</td>
                                            <td>{{ \Carbon\Carbon::parse($list->created_at)->toDayDateTimeString() }}</td>
                                            <td>
                                                {{ $list->tuser->firstName }} {{ $list->tuser->lastName }}
                                            </td>
                                            <td>
                                                <a href="{{ url('admin/dashboard/convert') }}/{{ $list->id }}"
                                                        class="m-1 btn btn-primary btn-sm">Converted</a>

                                                <a class="m-1 btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#editModal{{ $list->id }}">Edit Status</a>
                                            </td>
                                        </tr>

                                        <div id="editModal{{ $list->id }}" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-{{ Auth('admin')->User()->dashboard_style }}">
                                                        <h4 class="modal-title">Edit this User status</h4>
                                                        <button type="button" class="close text-{{ $text }}"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div
                                                        class="modal-body bg-{{ Auth('admin')->User()->dashboard_style }}">
                                                        <form method="post" action="{{ route('updateuser') }}">
                                                            <div class="form-group">
                                                                <h5 class=" text-{{ $text }}">User Status</h5>
                                                                <textarea name="userupdate" id="" rows="5" class="form-control bg-{{ Auth('admin')->User()->dashboard_style }} text-{{ $text }}"
                                                                    placeholder="Enter here"
                                                                    required>{{ $list->userupdate }}</textarea>
                                                            </div>
                                                            <input type="hidden" name="id" value="{{ $list->id }}">
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}">
                                                            <input type="submit" class="btn btn-primary" value="Save">

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /send all users email Modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $('.select2').select2();
            </script>
        </div>
    @endsection
