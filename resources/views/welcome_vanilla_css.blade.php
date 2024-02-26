<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Css Tailwind</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=acme:400" rel="stylesheet" />

        <!-- Styles et Scripts -->
        @vite(['resources/css/vanilla.css'])

    </head>
    <body class="antialiased h-full ">
            <div class="wrapper" >
                <header class="header">
                    <h1>HEADER</h1>
                </header>
                <nav class="nav ">
                    <h1>NAVBAR</h1>
                </nav>
                <article class="main ">
                    <h1>MAIN CONTENT</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta modi quam expedita voluptatibus cupiditate sunt autem recusandae magnam, et facilis nihil. Neque maiores ex amet. Fugiat ipsa magni assumenda quibusdam.</p>
                </article>
                <aside class="aside aside1">
                    <h1>ASIDE 1</h1>
                </aside>
                <footer class="footer ">
                    <h1>FOOTER</h1>
                </footer>
            </div>
    </body>
</html>
