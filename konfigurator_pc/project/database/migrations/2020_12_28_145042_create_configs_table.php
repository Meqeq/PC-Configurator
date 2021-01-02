<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->integer('cpu_id');
            $table->integer('gpu_id');
            $table->integer('mb_id');
            $table->integer('ram_id');
            $table->integer('drive_id');
            $table->integer('case_id');
            $table->integer('psu_id');
            $table->integer('cooling_id');
            $table->text('desc');
            $table->double('benchmark');
            $table->decimal('price', 8, 2);
            $table->boolean('is_verified');
            $table->integer('user_id');
            $table->string('share_url');
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
        Schema::dropIfExists('configs');
    }
}
