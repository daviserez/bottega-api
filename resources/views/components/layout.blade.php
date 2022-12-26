<!DOCTYPE html>
<html class="dark">
    <head>
        <title>{{ $title ?? "La Bottega" }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="dark:bg-slate-800 dark:text-slate-300">
        <div >
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>