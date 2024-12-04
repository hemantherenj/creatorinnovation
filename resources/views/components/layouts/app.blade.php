<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Bethesda Bible College' }}</title>
        @livewireStyles
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-BS2uco1Z.css')}}">
    </head>
    <body 
        x-data="{navOpen: false, scrolledFromTop: false}"
        x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
        @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
        :class="{
        'overflow-hidden': navOpen,
        'overflow-scroll': !navOpen
        }"
    >
        @livewire('partials.navbar')
        {{ $slot }}
        @livewire('partials.footer')
        @livewireScripts
        <script src="{{ asset('build/assets/app-z-Rg4TxU.js') }}" data-navigate-track></script>
    </body>
</html>
