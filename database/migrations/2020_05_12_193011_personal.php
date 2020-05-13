<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    /*  Schema::create('personal', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombres', 50);
        $table->string('apellido_p', 50);
        $table->string('apellido_m', 50);
        $table->integer('ci');
        $table->integer('telefono');
        $table->date('fecha');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `personal` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `nombres` VARCHAR(50) NULL DEFAULT NULL,
	    `apellido_p` VARCHAR(50) NULL DEFAULT NULL,
	    `apellido-m` VARCHAR(50) NULL DEFAULT NULL,
	    `ci` INT NULL DEFAULT NULL,
	    `telefono` INT NULL DEFAULT NULL,
	    `fecha` DATE NULL DEFAULT NULL,
      PRIMARY KEY (`id`),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
       )
      COLLATE='latin1_swedish_ci'
      ;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
