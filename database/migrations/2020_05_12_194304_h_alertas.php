<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HAlertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('h_alertas', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_vecino')->references('id')->on('vecinos');
        $table->string('motivo', 100);
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `h_alertas` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `motivo` VARCHAR(100) NULL DEFAULT NULL,
	    `id_vecino` INT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__vecinos-halertas` FOREIGN KEY (`id_vecino`) REFERENCES `vecinos` (`id`),
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
