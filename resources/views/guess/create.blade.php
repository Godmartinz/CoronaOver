@extends('layout')
<form method="POST" action="guess/create">
    @csrf
<div class="field">
    <label class="label">Screen Name</label>
    <div class="control">
        <input class="input" type="name" placeholder="Enter a Screen Name">
    </div>
</div>
<div class="field">
    <label class="label">Guess Date</label>
        <input type="date">
</div>
    =
        <div class="control">
            <button class="button is-link" type="submit">Submit</button>
        </div>

    </div>
</form>
