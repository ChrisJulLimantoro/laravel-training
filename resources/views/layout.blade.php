<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN for jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <!-- CDN for Tailwind -->
        <script src="https://cdn.tailwindcss.com/3.3.0"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <!-- CDN for Tailwind Element -->
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
        <!-- CDN for SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
            rel="stylesheet" />

        <style>
        @import url('https://fonts.googleapis.com/css2?family=Spinnaker&display=swap');
        *{font-family : 'Spinnaker',sans-serif !important}
        </style>
        <title>@yield('title')</title>
        @yield('style')
    </head>
    <body class="overflow-x-hidden overflow-y-auto">
    <div class="w-screen min-h-screen h-full pb-16 bg-slate-300 pt-16 justify-center items-center overflow-x-hidden overflow-y-auto">
        @yield('content')
    </div>
        @yield('script')
    </body>
</html>