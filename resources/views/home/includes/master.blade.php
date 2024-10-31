<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.includes.head')

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


    @include('home.includes.menu')

    @yield('content')

    @include('home.includes.footer')

    @include('home.includes.foot')
</body>

</html>
