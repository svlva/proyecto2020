<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('usuarios', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->foreign('id_rol')->references('id')->on('roles');
        $table->foreign('id_personal')->references('id')->on('personal');
        $table->string('nombreUsuario', 20);
        $table->string('password', 20);
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `usuarios` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `nombreUsuario` VARCHAR(20) NULL DEFAULT NULL,
	    `password` VARCHAR(20) NULL DEFAULT NULL,
	    `id_rol` INT NULL DEFAULT NULL,
	    `id_personal` INT NULL DEFAULT NULL,
	    PRIMARY KEY (`id`),
	    CONSTRAINT `FK__roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`),
	    CONSTRAINT `FK__personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id`),
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
