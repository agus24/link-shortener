<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css'])
    </head>
    <body class="antialiased">
        <div class="bg-black h-screen text-white px-20">
            <div class="w-full h-full flex items-center justify-center flex-col">
                <h3 class="text-4xl uppercase font-bold tracking-widest">Shorten your url</h3>
                <form class="mt-4 w-full" action="/" method="POST">
                    @csrf
                    <input
                        type="text"
                        name="url"
                        placeholder="https://google.com"
                        class="w-full px-4 py-4 rounded bg-black border border-white shadow-lg"
                    >
                    @error('url')
                        <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                    @enderror
                    <div class="flex items-center justify-center w-full">
                        <button class="w-full mt-2 bg-purple-400 rounded-lg py-1 hover:bg-purple-500">Submit</button>
                    </div>
                </form>
                @if (isset($link))
                <div class="mt-10 w-full text-center">
                    <h3 class="text-3xl uppercase font-bold tracking-widest">Your Url</h3>
                    <div class="w-full bg-purple-600 text-left px-4 py-2 mt-2 rounded-lg text-white">
                        {{ route('redirect', $link->short_url) }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
