<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative h-screen overflow-hidden">

            <div class="flex h-full">
                <div class="relative overflow-y-auto overflow-x-hidden flex-none h-full">
                    <livewire:table-list />
                </div>
                <div class="flex-1 relative overflow-auto h-full">
                    <livewire:table />
                </div>
            </div>
        </div>
    </body>
</html>
