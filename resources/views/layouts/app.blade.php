<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ayndrilla Counselling - Humanistic Counselling in Brighton & Hove</title>
    @section('meta_keywords')
        <meta name="keywords" content="plugin, utility"/>
    @show @section('meta_author')
        <meta name="author" content="Brian Etheridge"/>
    @show @section('meta_description')
        <meta name="description" content="Ayndrilla Counselling - Humanistic Counselling in Brighton & Hove"/>
    @show
        <meta property="og:title" content="Ayndrilla Counselling">
        <meta property="og:image" content="/img/ayndrilla-singharay.png">
        <meta property="og:description" content="Ayndrilla Counselling - Humanistic Counselling in Brighton & Hove">

		<link href="{{ asset('css/site.css?v6') }}" rel="stylesheet">
        <script src="{{ asset('js/site.js?v6') }}"></script>

    @yield('styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>
<body>


<div class="wrapper">

    @if (!Auth::guest())
        @include('partials.nav')
    @endif

    <div class="">

        @yield('content')

    </div>

    <div class="row footer-row-container">
        <div style="display: inline-block; float: left;padding-top:40px;padding-left: 10px;">Copyright &copy; {{ (new DateTime)->format('Y') }} A Singharay</div><div style="display: inline-block;padding-top:40px;"><a href="https://www.bacp.co.uk/" target="_blank" title="BACP website - opens in a new window"><img class="" src="/img/bacp_logo.png" alt="" width="130"></a></div><div style="display: inline-block;float: right;padding-top:40px;padding-right: 10px;"><a href="/privacy/" title="">Privacy Notice</a></div>
        <div style="clear: both"></div>
    </div>

</div>

@yield('global-scripts')
@yield('page-scripts')

</body>
</html>