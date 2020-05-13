<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('noticias', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_usuarios')->references('id')->on('usuarios');
        $table->string('titulo', 60);
        $table->text('cuerpo');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `noticias` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `titulo` VARCHAR(60) NULL DEFAULT NULL,
	    `cuerpo` TEXT NULL DEFAULT NULL,
	    `id_usuarios` INT NULL DEFAULT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__usuarios-noticia` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id`),
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
