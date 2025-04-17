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
    <button>Need more motivation?</button>
    @include('partials.footer')
</body>
</html>
