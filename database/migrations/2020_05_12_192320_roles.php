<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class roles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('roles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombreRol', 20);
        $table->text('descripcion');
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `roles` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `nombreRol` VARCHAR(20) NOT NULL DEFAULT 'NULL',
      `descripcion` TEXT NOT NULL,
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
      Schema::drop('roles');
    }
}
