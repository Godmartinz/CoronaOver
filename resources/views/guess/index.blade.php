@extends ('layout')
<!-- Guess List Section
================================================== -->
<section id="about">

    <div class="row section-header">

        <div class="twelve columns">

            <div class="icon-wrap">
                <i class="fa fa-group"></i>
            </div>

            <h1>Some of the guesses so far</h1>

        </div>

    </div> <!-- end section-header -->
    @foreach($guessEntries as $guess)
    <div class="row section-content">

        <div class="six columns">
        <h3>{{$guess->name}}</h3>

        <p>{{$guess->guess_date}}
        </p>
    </div>
    @endforeach
    <div class="six columns">
        <h3>Our Approach.</h3>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
    </div>

</div>
<!-- end section-content -->

<div class="row section-content">

    <div class="six columns">
        <h3>Our Vision.</h3>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
    </div>

    <div class="six columns">
        <h3>Our Objective.</h3>

        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </p>
    </div>

</div> <!-- end section-content -->







