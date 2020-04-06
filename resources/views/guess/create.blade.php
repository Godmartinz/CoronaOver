@extends('layout')
<form method="POST" action="{{ route('guess.create') }}">
    @csrf
<div class="field">
    <label class="label">Screen Name</label>
    <div class="control">
        <input class="input" type="name" name="name" placeholder="Enter a Screen Name" value="{{ old('name') }}">
    </div>
</div>
<div class="field">
    <label class="label" for="guess_date">Guess Date (YYYY-MM-DD)</label>
        <input name="guess_date" type="date" value="{{ old('guess_date') }}">
</div>

        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>

    </div>
</form>
