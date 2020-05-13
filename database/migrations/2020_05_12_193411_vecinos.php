
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vecinos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*Schema::create('vecinos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombres', 30);
        $table->string('apellido_p', 20);
        $table->string('apellido_m', 20);
        $table->integer('ci');
        $table->integer('ci_d');
        $table->integer('telefono');
        $table->date('fnac');
        $table->string('genero', 10);
        $table->string('correo', 40);
        $table->timestamps();
      });*/

      DB::statement("
      CREATE TABLE `vecinos` (
	    `id` INT NOT NULL AUTO_INCREMENT,
	    `nombres` VARCHAR(50) NOT NULL DEFAULT '0',
	    `apellido_p` VARCHAR(50) NOT NULL DEFAULT '0',
	    `apellido_m` VARCHAR(50) NOT NULL DEFAULT '0',
	    `ci` INT NOT NULL DEFAULT 0,
	    `ci_d` VARCHAR(2) NOT NULL DEFAULT '0',
	    `telefono` INT NOT NULL DEFAULT 0,
	    `fnac` DATE NOT NULL,
	    `genero` VARCHAR(50) NOT NULL DEFAULT '0',
	    `correo` VARCHAR(50) NOT NULL DEFAULT '0',
	     PRIMARY KEY (`id`),
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
