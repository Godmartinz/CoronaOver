@extends ('layout')
<body>

<div id="preloader">
    <div id="status">
        <img src="images/preloader.gif" height="64" width="64" alt="">
    </div>
</div>

<!-- Intro Section
================================================== -->
<section id="intro">

    <header class="row">



        <nav id="nav-wrap">

            <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

            <ul id="nav" class="nav">
                <li class={{Request::path() === 'guess/guess' ? 'current_page_item' : ''}}><a class="smoothscroll" href="#Home">Home</a></li>
                <li class={{Request::path() === 'guess/create' ? 'current_page_item' : ''}}><a class="smoothscroll" href="#About">Guesses</a></li>
                <li class={{Request::path() === 'guess/index' ? 'current_page_item' : ''}}><a class="smoothscroll" href="#Stats">Stats</a></li>
            </ul> <!-- end #nav -->

        </nav> <!-- end #nav-wrap -->

    </header> <!-- Header End -->

    <div  id="main" class="row">

        <div class="twelve columns">
            <br>
            <br>
            <h1>Do you know when the world is going to start up again?</h1>

            <p>Good because I don't and I need answers! Guess which date social distancing will be over... The sooner the better but no rush--I would prefer you get your answer right then wrong.  </p>

            <h5>-Time left until social distancing is over-</h5>

            <div id="counter" class="cf">
                <span>134 <em>days</em></span>
                <span>12 <em>hours</em></span>
                <span>50 <em>minutes</em></span>
                <span>33 <em>seconds</em></span>
            </div>
            @include('guess.create')
        </div>

    </div> <!-- main end -->

</section> <!-- end intro section -->


<!-- Guess List Section
================================================== -->

@include('guess.index')

<!-- About Section End-->




</body>
