<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>do the thing</title>

    @vite('resources/css/app.css')
</head>
<body class="flex flex-col gap-32 h-dvh place-content-center mx-auto min-w-sm max-w-5xl text-pretty px-4">
    @include('partials.header')
    @include('partials.quote')
    <a href="/" class="mx-auto">
        <button class="bg-zinc-700 px-8 py-4 rounded-lg duration-300 hover:bg-emerald-600 hover:scale-115 hover:duration-300">need more motivation?</button>
    </a>
    @include('partials.footer')
</body>
</html>
