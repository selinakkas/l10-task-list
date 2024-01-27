<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 Task List App</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- blade-formatter-disable -->
        <style type="text/tailwindcss">
            .btn{
                @apply rounded-md mt-4 mb-4 px-2 py-1 text-center font-medium shadow-md ring-1 ring-slate-700/10 hover:bg-slate-50
            }

            .link{
                @apply font-medium text-gray-700 underline underline-offset-4 
            }

            .label{
                @apply block uppercase text-slate-700 mb-2
            }

            input, textarea {
                @apply shadow-md appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
            }

            .error{
                @apply text-red-500 text-sm
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
        @if (Session::has('status'))
            <script>
                Swal.fire({
                    title: "Operation Completed Successfully!!",
                    width: 600,
                    padding: "3em",
                    color: "#716add",
                    background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
                    backdrop: `
                        rgba(0,0,123,0.4)
                        url("https://sweetalert2.github.io/images/nyan-cat.gif")
                        left top
                        no-repeat
                    `
                    });
            </script>
        @endif
    </body>
</html>