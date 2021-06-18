@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/report.css') }}">
@endpush

@section("content")
<daywisesalereportcomponent></daywisesalereportcomponent>
@endsection