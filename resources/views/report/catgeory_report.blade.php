@extends('layouts.layout')

@section("content")
<catgeoryreportcomponent :store="{{ json_encode($store) }}"></catgeoryreportcomponent>
@endsection

@push('scripts')
    <script src="{{ secure_asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ secure_asset('js/datatable.js') }}"></script>
    <script src="{{ secure_asset('js/pages/category_report.js') }}"></script>
    <script>
        'use strict';
        var category_report = new Category_report();
        category_report.load_listing_table();
    </script>
@endpush