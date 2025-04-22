<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>do the thing</title>

    @vite('resources/css/app.css')
</head>
<body class="flex flex-col gap-12 place-content-center h-dvh mx-auto px-8 min-w-sm max-w-5xl text-pretty md:gap-18 lg:h-vh lg:gap-32">
    @include('partials.header')
    @include('partials.quote')
        <a href="/" class="bg-zinc-700 mx-auto px-4 py-2 rounded-lg duration-300 outline-2 outline-emerald-600 hover:bg-emerald-600 hover:outline-transparent hover:scale-115 hover:duration-300 md:px-8 md:py-4">need more motivation?</a>
    @include('partials.footer')
</body>
</html>
