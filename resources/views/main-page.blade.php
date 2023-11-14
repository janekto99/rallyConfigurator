<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rally Configurator</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div class="flex flex-col h-screen">
    <div class="basis-1/12 flex items-center justify-between ml-2 mr-4">
        <h1 class="text-4xl font-bold">Rally team configurator</h1>
        <div>
            <a class="w-full" href="/">
                <button class="w-32 mr-8 bg-emerald-600 text-white p-2 rounded-lg hover:bg-emerald-500">Teams</button>
            </a>
            <a class="w-full" href="create-member">
                <button class="w-32 bg-amber-600 text-white p-2 rounded-lg hover:bg-amber-500">New member</button>
            </a>
            <a class="w-full" href="create-team">
                <button class="w-32 bg-indigo-600 text-white p-2 rounded-lg hover:bg-indigo-500">New team</button>
            </a>
        </div>
    </div>
    <div class="basis-11/12 flex flex-col items-center mt-24">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-red-500 my-0.5">{{$error}}</div>
            @endforeach
        @endif

        @yield('content')
    </div>
    @if(Session::has('success'))
        <div class="w-1/3 absolute bottom-0 right-2 bg-green-200 p-4 my-4 rounded-md">
            {{ Session::get('success') }}
        </div>
    @endif
</div>
</body>
</html>
