@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/dashboard.css') }}">
@endpush

@section("content")
    <billingcounterdashboardcomponent :store="{{ json_encode($store)}}"></billingcounterdashboardcomponent>
@endsection