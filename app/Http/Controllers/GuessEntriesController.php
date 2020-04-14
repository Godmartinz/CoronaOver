<?php

namespace App\Http\Controllers;

use App\GuessEntries;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GuessEntriesController extends Controller
{


    public function show($id)
    {
        if (!empty($id)) {
            $guess = GuessEntries::find($id);

            return view('index', $guess);
        }
            // Not sure what this is here for? If you're checking for auth, you'd want to use
            // middleware, not this in the controller

    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {

      \Log::debug('trying to save');
      $guess= new GuessEntries();
      $guess->name = request('name');

      \Log::debug('Guess: '.request('guess_date'));

      // We have to use Carbon here to normalize the date into a MySQL compatible date format, like YYYY-mm-dd
      $guess->guess_date = Carbon::parse( request('guess_date'))->format('Y-m-d');


      // Check to see if the object was saved
      if ($guess->save()) {

          \Log::debug('Saving.... ');

          // This was previously trying to redirect to a blade: redirect('guess.guess').
          // You want to redirect to a named
          // route OR return a view.

          // Also you always have to use `return` in order for either of those things to actually happen.
          return redirect(route('home'));
      }


      // Validation failed, so let's return the user back with any relevant errors and their input already populated
      \Log::debug('Could not save: '.$guess->getErrors());
      return redirect()->back()
          ->withErrors($guess->getErrors())
          ->withInput();;

    }


    public function edit(){

    }


    public function update($id){

        // You don't need to run a validator here, since you're using model-level validation

        request($id)->validate([
            'name'=> 'required',
            'guess_date'=> 'required'
        ]);
    }
    public function destroy(){

    }


    public function index()
    {

        \Log::debug('loading the index...');
        $guessEntries = GuessEntries::simplepaginate();

        \Log::debug(print_r($guessEntries, true));

        return view('index')->with('guessEntries', $guessEntries);
    }
    public function fetch(Request $request)
    {
        if($request->ajax())
        {
            $guessEntries= GuessEntries::simplepaginate();
            return view('index')->with('guessEntries', $guessEntries)->render();
        }

    }
    public function oldest() {
        $guessCountdown = GuessEntries::where('guess_date')->max();
        $countdown= $guessCountdown->guess_date;
        return strval($countdown);
    }


}
