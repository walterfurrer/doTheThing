<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>do the thing</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col gap-32 h-dvh place-content-center mx-auto min-w-sm max-w-5xl text-pretty px-4">
    <header class="place-items-center">
        <h1 class="font-black text-center text-6xl lg:text-9xl">do the thing</h1>
        <p class="font-semibold text-xl text-center lg:text-3xl">find motivation to just start doing the thing</p>
    </header>
    <main class="place-items-center">
        <div>
            <p class="text-left text-xl lg:text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, id quod. Aut debitis exercitationem illum itaque molestias quos rem repellat.</p>
            <p class="text-right text-lg lg:text-xl">-Author</p>
        </div>
    </main>
    <footer class="text-zinc-500 pt-8 flex flex-row flex-nowrap justify-around">
        <div class="flex flex-col place-content-end">
            <p class="leading-3">Made by Walter Furrer</p>
        </div>
        <div class="flex flex-row gap-x-4">
            <a href="https://x.com/furrerw">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-twitter-x fill-zinc-500 hover:fill-zinc-200" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg>
            </a>
            <a href="https://github.com/FurrerW/doTheThing">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-github fill-zinc-500 hover:fill-zinc-200" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                </svg>
            </a>
        </div>
    </footer>
</body>
</html>
