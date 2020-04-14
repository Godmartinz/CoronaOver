
<!-- Guess List Section
================================================== -->
<div id="about">

    <div class="row section-header">

        <div class="twelve columns">

            <div class="icon-wrap">
                <i class="fa fa-group"></i>
            </div>

            <h1>Some of the guesses so far</h1>

        </div>

    </div> <!-- end section-header -->

    <div class="row section-content">
        <div class="six columns">
            <h4>Name</h4>
        </div>
        <div class="six columns">
            <h4>Date</h4>
        </div>

        @if ((isset($guessEntries)) && ($guessEntries->count() > 0))
            @foreach ($guessEntries as $guessEntry)
                <div class="six columns">
                    <h3>{{ $guessEntry->name }}</h3>
                </div>
                <div class="six columns">
                    <h3>{{ date('M-d-y', strtotime($guessEntry->guess_date)) }}</h3>
                </div>

            @endforeach
                <div class="six columns">
                    {{$guessEntries->links()}}
                </div>
        @endif

    </div>


</div> <!-- end section-content -->







