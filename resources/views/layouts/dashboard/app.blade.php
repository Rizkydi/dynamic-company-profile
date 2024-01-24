<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/logo-company.png') }}" type="image/x-icon">
    <title>Document</title>
    @include('layouts.dashboard.assets.style')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    @include('layouts.dashboard.navbars.sidebar')

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        @include('layouts.dashboard.navbars.nav')
        @yield('cards')
    </main>

    @include('sweetalert::alert')
    @include('layouts.dashboard.assets.script')
    @stack('scripts')
</body>

</html>
