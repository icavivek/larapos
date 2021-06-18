@php
    $favicon = config("app.favicon");
@endphp
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        'use strict';
        window.settings = {
            menu_language: "{{ isset($language)?$language:'' }}",
            csrfToken: "{{ csrf_token() }}",
            logged_in_user: "{{ session('slack') }}",
            access_token: "{{ session('access_token') }}",
            logged_in: "{{ (session('slack') != '')?1:0 }}",
            language: "{{ (isset($logged_user_data['selected_language_code']))?$logged_user_data['selected_language_code']:(isset($language)?$language:'en') }}",
            restaurant_mode: "{{ (isset($logged_user_data['selected_store']['restaurant_mode']))?$logged_user_data['selected_store']['restaurant_mode']:0 }}",
            currency_code: "{{ (isset($logged_user_data['selected_store']['currency_code']))?$logged_user_data['selected_store']['currency_code']:'' }}"
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $favicon }}">
    <link rel="apple-touch-icon" href="{{ secure_asset('images/logo_apple_touch_icon.png') }}"/>
    
    <link rel="stylesheet" href="{{ secure_asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/datatables/dataTables.bootstrap4.min.css') }}"> 
    <link rel="stylesheet" href="{{ secure_asset('plugins/fontawesome/all.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/web.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/tables.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/button.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/labels.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/modal.css') }}">
    @stack('styles')
    <title>{{ (config('app.app_title'))?config('app.app_title'):'Appsthing POS' }}</title>
</head>