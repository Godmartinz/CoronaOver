@yield('layout')
<section id="About">

    <div class="row section-header">

        <div class="twelve columns">

            <div class="icon-wrap">
                <i class="fa fa-group"></i>
            </div>

            <h1>Some of the latest educated guesses:</h1>

                <ul>
                    @foreach($guessEntries as $guess)
                   <li>{{$guess->name}} says it will be over </li>
                </ul>
                    @endforeach

        </div>

    </div> <!-- end section-header -->

    <div class="row section-content">

        <div class="six columns">
            <h3>The Lows</h3>
            {{-- @if ($name)
                 <li>$name</li>
             @endif--}}
        </div>

        <div class="six columns">
            <h3>The Highs</h3>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            </p>
        </div>

        <div id="call-to-action">

            <div class="row section-ads">

                <div class="twelve columns">

                    <h2><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h2>

                    <p class="lead">
                        Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
                        Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
                        <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
                    </p>

                    <div class="action">
                        <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>
                    </div>

                </div>

            </div> <!-- end section-ads -->

        </div> <!-- end call-to-action -->

</section> <!-- About Section End-->
