<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuessEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guess_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->date('guess_date');

            // You should probably have used
            // $table->timestamps() here, as those are magical laravel properties
            // which ensure they'll always be updated/created when things are saved.

            // Since you're creating it as a regular timestamp here, you miss out
            // on the auto-updating part and have to remember to set it maually.
            // Previously:
            // $table->timestamp('created_at');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guess_entries');
    }
}
