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
        'created_at' => 'required|date'
    ];
    protected $fillable = [
        'name',
        'guess_date',
        'created_at'
    ];
}
