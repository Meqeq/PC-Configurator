<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooling', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->decimal('price', 8, 2);
            $table->string('producer');
            $table->string('socket');
            $table->integer('tpd');
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
        Schema::dropIfExists('cooling');
    }
}
