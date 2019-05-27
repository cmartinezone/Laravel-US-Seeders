
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     * @table states
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('state_id');
            $table->string('name', 45);
            $table->string('abv', 45)->nullable();
            $table->integer('country_id')->unsigned();

            $table->foreign('country_id')
                ->references('country_id')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('states');
    }
}
