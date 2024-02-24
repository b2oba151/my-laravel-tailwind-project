<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Css Tailwind</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles et Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased h-full ">
        <div class="tablet:container mx-auto border flex flex-col justify-between gap-y-2 items-center mt-9">
            <form>
                <label class="block">
                <span class="label">Username</span>
                <input type="text" value="tbone" class="input w-[500px]"/>
                </label>
            </form>

            <fieldset>
                <legend>Published status</legend>
                <input id="draft" class="peer/draft" type="radio" name="status" checked />
                <label for="draft" class="peer-checked/draft:text-sky-500">Draft</label>
                <input id="published" class="peer/published" type="radio" name="status" />
                <label for="published" class="peer-checked/published:text-sky-500">Published</label>
                <div class="hidden peer-checked/draft:block">Drafts are only visible to administrators.</div>
                <div class="hidden peer-checked/published:block">Your post will be publicly visible on your site.</div>
            </fieldset>

            <fieldset>
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input class="search-input" placeholder="Search for anything..." type="text" name="search"/>
                </label>
            </fieldset>

        </div>

        <div class="border border-blue-400 ">
            <div class="flex items-center justify-center pt-6 space-x-6">
                <div class="basis-1/3 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">01</div>
                <div class="basis-8/4 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">02</div>
                <div class="basis-2/4 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">03</div>
              </div>
        </div>
    </body>
</html>
