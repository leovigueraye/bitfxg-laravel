
@extends('layouts.app')
@section('content')
    @include('admin.nav')
    <livewire:admin.award-order :order="$order" />
@endsection
