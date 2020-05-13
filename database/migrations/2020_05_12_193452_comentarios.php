<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comentarios extends Migration
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
        $table->foreign('id_noticias')->references('id')->on('noticias');
        $table->text('comentario');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `comentarios` (
	       `id` INT NOT NULL,
	       `comentario` TEXT NOT NULL,
	       `id_usuarios` INT NOT NULL DEFAULT 0,
	        `id_noticias` INT NOT NULL DEFAULT 0,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__usuarios_android` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios_android` (`id`),
	    CONSTRAINT `FK__noticias` FOREIGN KEY (`id_noticias`) REFERENCES `noticias` (`id`),
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
