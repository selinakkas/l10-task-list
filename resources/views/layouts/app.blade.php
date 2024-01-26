<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 Task List App</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- blade-formatter-disable -->
        <style type="text/tailwindcss">
            .btn{
                @apply rounded-md mt-4 mb-4 px-2 py-1 text-center font-medium shadow-md ring-1 ring-slate-700/10 hover:bg-slate-50
            }
        </style>
         <!-- blade-formatter-enable  -->

        @yield('styles')
    </head>
    <body class="container mx-auto mt-10 mb-10 max-w-lg">
        <h1 class ="text-2xl font-bold tracking-wider">@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif
            @yield('content')
        </div>
    </body>
</html>