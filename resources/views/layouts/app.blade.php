<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
        <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token;?>>

        <title>Hotwear</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Links -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
        <script type="module" src="{{ url('script/main.js') }}"></script>

        <!-- Styles -->
        @livewireStyles
        @yield('head')
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <main class="min-h-screen bg-gray-100">
            <header class="bg-white">
                <h1 style="font-size:25px;">Hotwear</h1>
            </header>
            @livewire('navigation-menu')

            <!-- Page Heading 
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif-->

            <!-- Page Content -->
            <div>
                {{ $slot }}
            </div>

            @include('includes.foot')
