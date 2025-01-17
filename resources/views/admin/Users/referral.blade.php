
@extends('layouts.app')
    @section('content')
        @include('admin.nav')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{$text}} d-inline">Add user to {{$user->name}} referrals list</h1>
                    <div class="d-inline">
                        <div class="float-right btn-group">
                            <a class="btn btn-primary btn-sm" href="{{route('viewuser', $user->id)}}"> <i class="fa fa-arrow-left"></i> back</a>
                        </div>
                    </div>
                </div>
                <x-danger-alert/>
                <x-success-alert/>
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                        <form method="POST" action="{{route('addref')}}">
                            @csrf
                            <div class="form-group">
                                <h4 class="text-{{$text}}">Select User</h4>
                                <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}} select2" name="ref_id">
                                    @foreach ($ref as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-{{$text}}">This indicates that the selected user was referred by {{$user->name}}</small>
                            </div>
                            <input type="hidden" name="user_id" value="{{$user->id}}">

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="px-3 btn btn-primary">
                                        Save Referral
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('.select2').select2();
        </script>
@endsection