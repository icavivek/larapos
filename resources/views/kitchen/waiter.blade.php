@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/kitchen_view.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/labels.css') }}">
@endpush

@section("content")
<waiterviewcomponent></waiterviewcomponent>
@endsection