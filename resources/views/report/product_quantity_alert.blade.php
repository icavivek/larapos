@extends('layouts.layout')

@section("content")
<productquantityalertcomponent></productquantityalertcomponent>
@endsection

@push('scripts')
    <script src="{{ secure_asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ secure_asset('js/datatable.js') }}"></script>
    <script src="{{ secure_asset('js/pages/product_quantity_alert.js') }}"></script>
    <script>
        'use strict';
        var product_quantity_alert = new Product_quantity_alert();
        product_quantity_alert.load_listing_table();
    </script>
@endpush