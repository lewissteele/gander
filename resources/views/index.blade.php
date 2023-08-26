<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">

        <div class="flex">
            <div class="flex-none w-25">
                <livewire:sidebar />
            </div>
            <div class="flex-auto w-max"></div>
        </div>
    </body>
</html>
