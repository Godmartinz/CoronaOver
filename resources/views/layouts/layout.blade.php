<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>The Coronavirus Deadpool </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/media-queries.css">
    <link rel="stylesheet" href="/css/clockcountdown.css">

    <!-- this file isn't in the code base so it's throwing an error. -->
    <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">--}}

    <!-- Script
    ================================================== -->
    <script src="/js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="/favicon.png" >

</head>

<body>

<div id="preloader">
    <div id="status">
        <img src="/images/preloader.gif" height="64" width="64" alt="">
    </div>
</div>


@yield('content')



<!-- About Section End-->

<!-- footer ================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">

            <ul class="copyright">
                <li>&copy; Copyright {{ date("Y'")  }} </li>
                <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>
            </ul>

        </div>

    </div>

    <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a></div>

</footer> <!-- Footer End-->



</body>


<!-- Java Script
================================================== -->

<script>window.jQuery || document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>


<script src="/js/gmaps.js"></script>
<script src="/js/waypoints.js"></script>
<script src="/js/jquery.countdown.js"></script>
<script src="/js/jquery.placeholder.js"></script>
<script src="/js/backstretch.js"></script>
<script src="/js/init.js"></script>
<script src="/js/clockcountdown.js"></script>

<!-- neither is this one -->
<script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>

</html>
