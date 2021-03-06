@extends('layouts.order_layout')

@push('styles')
    <link rel="stylesheet" href="{{ secure_asset('css/billing.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/quickpanel.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/labels.css') }}">
@endpush

@section("content")
<addordercomponent :store_currency = "{{ json_encode($store_currency) }}" :store_tax_percentage="{{ json_encode($store_tax_percentage) }}" :store_discount_percentage="{{ json_encode($store_discount_percentage) }}" :payment_methods="{{ json_encode($payment_methods) }}" :categories="{{ json_encode($categories) }}" :default_business_account="{{ json_encode($default_business_account) }}" :business_accounts="{{ json_encode($business_accounts) }}" :order_data="{{ json_encode($order_data) }}" :store_restaurant_mode="{{ json_encode($store_restaurant_mode) }}" :restaurant_order_types="{{ json_encode($restaurant_order_types) }}" :vacant_tables="{{ json_encode($vacant_tables) }}" :new_order_link="{{ json_encode($new_order_link) }}" :billing_types="{{ json_encode($billing_types) }}" :store_billing_type="{{ json_encode($store_billing_type) }}" :store_waiter_role_slack="{{ json_encode($store_waiter_role_slack) }}" :keyboard_shortcuts="{{ json_encode($keyboard_shortcuts) }}" :keyboard_shortcuts_formatted="{{ json_encode($keyboard_shortcuts_formatted) }}" :enable_customer_detail_popup="{{ json_encode($enable_customer_detail_popup) }}"></addordercomponent>
@endsection