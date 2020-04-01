<?php

namespace App\Http\Controllers;

use App\GuessEntries;
use Illuminate\Http\Request;

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

    public function create(){
    return view('guesses.create');
    }
    public function store(){
      dump(request()->all());
        $guess= new guess_entries();

      $guess->name = request('name');
      $guess->guess_date = request('guess_date');
      $guess->created_at = request('created_at');

      $guess-> save();
    }
    public function edit(){

    }
    public function update($id){
        request()->validate([
            'name'=> 'required',
            'guess_date'=> 'required'

        ]);
    }
    public function destroy(){

    }
    public function index(){
        $guessEntries=GuessEntries::latest()->get();

        return view('index', ['guessEntries'=>$guessEntries]);


    }

}
