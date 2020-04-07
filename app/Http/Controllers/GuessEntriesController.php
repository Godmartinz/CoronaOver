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
            return redirect("index")->with('error', 'auth.screen-name');
    }

    public function create()
    {
        return view('guess.create');
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
          return redirect(route('guess.guess'));
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
        request($id)->validate([
            'name'=> 'required',
            'guess_date'=> 'required'
        ]);
    }
    public function destroy(){

    }
    public function index(){
        $guessEntries = GuessEntries::latest()->get();

        return view('guess.index',compact('guessEntries'));


    }

}
