<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (BLueprint $table)) {
            $table->engine = 'InnoDB'
            $table->incriments('id')
            $table->string('ganres', 10)->index();
            $table->string('title', 30)->index();
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
            /**$table->string('image')->deffault('some.jp')*/
            $table->timestamps();
            $table->integer('IMDB')->nullable();
            

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
