<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->id();
            $table->string('cargo_no')->unique();
            $table->string('cargo_type');
            $table->integer('cargo_size');
            $table->double('weight');
            $table->string('remarks');
            $table->double('wharfage');
            $table->integer('penalty');
            $table->double('storage');
            $table->double('electricity');
            $table->double('destuffing');
            $table->double('lifting');
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
        Schema::dropIfExists('cargo');
    }
};
