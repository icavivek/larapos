@extends('layouts.layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/multiselect.css') }}">
@endpush

@section("content")
<addproductcomponent :statuses="{{ json_encode($statuses) }}" :taxcodes="{{ json_encode($taxcodes) }}"  :suppliers="{{ json_encode($suppliers) }}" :categories="{{ json_encode($categories) }}" :discount_codes="{{ json_encode($discount_codes) }}" :product_data="{{ json_encode($product_data) }}" :stock_transfer_data="{{ json_encode($stock_transfer_data) }}" :stock_transfer_product_data="{{ json_encode($stock_transfer_product_data) }}" :measurement_units="{{ json_encode($measurement_units) }}" :addon_groups="{{ json_encode($addon_groups) }}"></addproductcomponent>
@endsection