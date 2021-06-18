@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/dashboard.css') }}">
@endpush

@section("content")
    <dashboardcomponent :store="{{ json_encode($store)}}"></dashboardcomponent>
@endsection