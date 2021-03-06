@extends('layouts.layout')

@section("content")
<div class="row">
    <div class="col-md-12">
        
        <div class="d-flex flex-wrap mb-4">
            <div class="mr-auto">
                <span class="text-title">{{ __("Quotations") }}</span>
            </div>
            <div class="">
                @if (check_access(array('A_ADD_QUOTATION'), true))
                    <a href="{{ route('add_quotation')}}" role="button" class="btn btn-primary">{{ __("New Quotation") }}</a>
                @endif
            </div>
        </div>

        <div class="table-responsive">
            <table id="listing-table" class="table display nowrap w-100">
                <thead>
                    <tr>
                        <th>{{ __("Quotation Number") }}</th>
                        <th>{{ __("Quotation Reference #") }}</th>
                        <th>{{ __("Bill To") }}</th>
                        <th>{{ __("Bill To Name") }}</th>
                        <th>{{ __("Quotation Date") }}</th>
                        <th>{{ __("Quotation Due Date") }}</th>
                        <th>{{ __("Amount") }}</th>
                        <th>{{ __("Status") }}</th>
                        <th>{{ __("Created On") }}</th>
                        <th>{{ __("Updated On") }}</th>
                        <th>{{ __("Created By") }}</th>
                        <th>{{ __("Action") }}</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ secure_asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ secure_asset('js/datatable.js') }}"></script>
    <script src="{{ secure_asset('js/pages/quotations.js') }}"></script>
    <script>
        'use strict';
        var quotations = new Quotations();
        quotations.load_listing_table();
    </script>
@endpush