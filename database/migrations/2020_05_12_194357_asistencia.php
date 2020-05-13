<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asistencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('asistencia', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_vecino')->references('id')->on('vecinos');
        $table->foreign('id_reuniones')->references('id')->on('reuniones');
        $table->time('hora');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `asistencia` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `hora` TIME NULL,
	    `id_vecino` INT NULL,
	    `id_reuniones` INT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__vecinos-asistencia` FOREIGN KEY (`id_vecino`) REFERENCES `vecinos` (`id`),
	    CONSTRAINT `FK__reuniones-asistencia` FOREIGN KEY (`id_reuniones`) REFERENCES `reuniones` (`id`),
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )
      COLLATE='latin1_swedish_ci'
      ;
      ");

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
