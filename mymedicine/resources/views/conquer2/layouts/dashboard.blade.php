<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <title>Conquer | Admin Dashboard Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    @include('conquer2.style_theme')
    <!-- END THEME STYLES -->

</head>

<body class="page-header-fixed">
    @include('conquer2.partials.header')

    <div class="clearfix"> </div>

    <div class="page-container">
        @include('conquer2.partials.sidebar')

        <div class="page-content">
            <div class="page-content-wrapper">
                @include('conquer2.js')
                @yield('content')
            </div>
        </div>

</body>

</html>
