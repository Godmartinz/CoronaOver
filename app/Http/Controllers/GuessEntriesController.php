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

    public function store(){

      $guess= new GuessEntries();
      $guess->name = request('name');
      $guess->guess_date = request('guess_date');
      $guess->created_at = Carbon::now()->isoFormat('MMM Do YY');
      $guess-> save();

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
        $guessEntries=GuessEntries::latest()->get();

        return view('guess.index',compact('guessEntries'));


    }

}
