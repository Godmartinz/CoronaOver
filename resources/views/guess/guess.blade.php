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
                <li><a class="smoothscroll" href="#Guesses">Guesses</a></li>
                <li><a class="smoothscroll" href="#Stats">Stats</a></li>
            </ul> <!-- end #nav -->

        </nav> <!-- end #nav-wrap -->

    </header> <!-- Header End -->

    <div  id="main" class="row">

        <div class="twelve columns">
            <br>
            <br>
            <h1>Do you know when the world is going to start up again?</h1>

            <p>Good because I don't and I need answers! Guess which date social distancing will be over...
                The sooner the better but no rush--I would prefer we get it right rather than wrong.  </p>

            <h5>-Time left until social distancing is over-</h5>





            <div id="clockdiv">
                <div>
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>





      @include('guess.create')



        </div>

    </div> <!-- main end -->

</section> <!-- end intro section -->


<!-- Guess List Section
================================================== -->
<section id="Guesses">
    @include('guess.index')
</section>


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
