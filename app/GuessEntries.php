<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

class GuessEntries extends Model
{
    use ValidatingTrait;

    protected $rules = [
        'name' => 'required|unique',
        'guess_date' => 'required|date',
        'created_at' => 'date'
    ];
    protected $validationMessages = [
        'name.required' => 'Dont forget your name.',
        'name.unique' => 'Someone else has your name.',
        'guess_date.required' => 'Where is your guess?',
        'guess_date.date' => 'That doesnt look like a date to me.'


    ];

}
