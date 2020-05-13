<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('mensajes', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_vecinos')->references('id')->on('vecinos');
        $table->foreign('id_usuarios')->references('id')->on('usuarios');
        $table->string('asunto', 60);
        $table->text('descripcion');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `mensajes` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `asunto` VARCHAR(60) NOT NULL,
	    `descripcion` TEXT NOT NULL,
	    `id-vecinos` INT NOT NULL DEFAULT 0,
	    `id-usuarios` INT NOT NULL DEFAULT 0,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__vecinos-mensajes` FOREIGN KEY (`id-vecinos`) REFERENCES `vecinos` (`id`),
	    CONSTRAINT `FK__usuarios_android-mensajes` FOREIGN KEY (`id-usuarios`) REFERENCES `usuarios_android` (`id`),
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
