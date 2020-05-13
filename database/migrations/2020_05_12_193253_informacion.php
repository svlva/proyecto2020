<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('informacion', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_personal')->references('id')->on('personal');
        $table->string('titulo', 30);
        $table->text('cuerpo');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `informacion` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `titulo` VARCHAR(30) NULL DEFAULT NULL,
	    `cuerpo` TEXT NULL DEFAULT NULL,
      `id_personal` INT NULL DEFAULT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK_informacion_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`),
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
