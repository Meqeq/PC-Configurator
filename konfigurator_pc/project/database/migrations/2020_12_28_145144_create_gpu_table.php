<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpu', function (Blueprint $table) {
            $table->id('gpu_id');
            $table->string('name');
            $table->text('desc');
            $table->decimal('price', 8,2);
            $table->string('pcie_int');
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
        Schema::dropIfExists('gpu');
    }
}
