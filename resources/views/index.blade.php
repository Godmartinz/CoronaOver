@extends ('layouts.layout')

@section('content')
<!-- Intro Section
================================================== -->
<section id="intro">
    <header class="row">



        <nav id="nav-wrap">

            <a class="menu-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
            <a class="menu-btn" href="#" title="Hide navigation">Hide navigation</a>

            <ul id="nav" class="nav">
                <li><a class="smoothscroll" href="#guesses">Guesses</a></li>

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

            <h5>-Its going to end before this clock reaches zero.-</h5>





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





      @include('create')



        </div>

    </div> <!-- main end -->

</section> <!-- end intro section -->

@section('content')
    <a name="guesses"></a>
<!-- Guess List Section
================================================== -->
<section id="Guesses">
    @include('guesses')
</section>

