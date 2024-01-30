<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('web.includes.head')
    <style>
        #overlay {
        background:rgba(0,0,0,0.8);
        color: #fff;
        position: fixed;
        height: 100%;
        width: 100%;
        z-index: 5000;
        top: 0;
        left: 0;
        float: left;
        text-align: center;
        padding-top: 20%;
        filter: blur(1px);
    }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    @include('web.includes.header')
    @yield('content')
    @include('web.includes.footer')
    @stack('scripts')
</body>

</html>
