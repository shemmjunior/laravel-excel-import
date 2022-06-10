<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $procedure = "
        DROP PROCEDURE IF EXISTS `get_cargos`;
           CREATE PROCEDURE get_cargos()
           BEGIN
           SELECT 
                cargo_no,
                cargo_type,
                cargo_size,
                weight,
                remarks,
                wharfage,
                penalty,
                storage, 
                electricity,
                destuffing,
                lifting 
           FROM cargo;
           END;";
        \DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_cargo_data_procedure');
    }
};
