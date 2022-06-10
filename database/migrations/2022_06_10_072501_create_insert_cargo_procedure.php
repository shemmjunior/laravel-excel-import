<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\BlueprINT;
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
        $procedure = "DROP PROCEDURE IF EXISTS `insert_cargo`;
        CREATE PROCEDURE insert_cargo(
            IN cargo_no VARCHAR(15),
            IN cargo_type VARCHAR(5),
            IN cargo_size INT,
            IN weight DOUBLE,
            IN remarks VARCHAR(15),
            IN wharfage DOUBLE,
            IN penalty INT,
            IN storage DOUBLE,
            IN electricity DOUBLE,
            IN destuffing	DOUBLE,
            IN lifting DOUBLE)
         BEGIN INSERT INTO cargo 
            (   cargo_no,
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
            ) VALUES (
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
            );
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

    }
};
