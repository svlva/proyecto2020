<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuariosAndroid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('usuarios_android', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_vecinos')->references('id')->on('vecinos');
        $table->string('nombreUsuario', 30);
        $table->string('password', 30);
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `usuarios_android` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `nombreUsuario` VARCHAR(50) NULL DEFAULT NULL,
	    `password` VARCHAR(50) NULL DEFAULT NULL,
	    `id_vecinos` INT NULL DEFAULT '0',
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__vecinos` FOREIGN KEY (`id_vecinos`) REFERENCES `vecinos` (`id`),
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
