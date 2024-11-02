<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.includes.head')
    @yield('header-area')

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


    @include('home.includes.menu')

    @yield('content')

    @include('home.includes.footer')

    @include('home.includes.foot')
    @yield('script-area')
</body>

</html>
