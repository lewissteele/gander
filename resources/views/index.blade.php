<!DOCTYPE html>
<html data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="navbar bg-base-100">
            <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
            <select class="select select-bordered w-full max-w-xs">
                <option disabled selected>Who shot first?</option>
                <option>Han Solo</option>
                <option>Greedo</option>
            </select>
        </div>
        <livewire:sidebar />
    </body>
</html>
