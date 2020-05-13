<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('contactos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombreReferencia', 50);
        $table->integer('telefono');
        $table->string('direccion', 50);
        $table->string('rubro', 20);
        $table->string('dias_atencion', 50);
        $table->string('horario', 50);
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `contactos` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `nombreReferencia` VARCHAR(50) NULL DEFAULT NULL,
	    `telefono` INT NULL DEFAULT NULL,
	    `direccion` VARCHAR(50) NULL DEFAULT NULL,
	    `rubro` VARCHAR(20) NULL DEFAULT NULL,
	    `dias_atencion` VARCHAR(50) NULL DEFAULT NULL,
	    `horario` VARCHAR(50) NULL DEFAULT NULL,
	    `id_usuario` INT NULL DEFAULT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
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
