<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reuniones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('reuniones', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('asunto', 60);
        $table->string('lugar_realizacion', 120);
        $table->string('organizacion', 120);
        $table->string('presentador', 120);
        $table->text('descripcion');
        $table->date('fecha');
        $table->time('hora');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `reuniones` (
	    `id` INT NOT NULL,
	    `asuntos` VARCHAR(120) NULL DEFAULT NULL,
	    `lugar_realizacion` VARCHAR(120) NULL DEFAULT NULL,
	    `organizacion` VARCHAR(120) NULL DEFAULT NULL,
	    `presentador` VARCHAR(120) NULL DEFAULT NULL,
	    `descripcion` TEXT NULL DEFAULT NULL,
	    `fecha` DATE NULL,
	    `hora` TIME NULL,
	     PRIMARY KEY (`id`),
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
