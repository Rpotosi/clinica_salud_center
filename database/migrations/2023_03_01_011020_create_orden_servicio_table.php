<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_servicio', function (Blueprint $table) {
            $table->comment('');
            $table->bigInteger('id_orden', true);
            $table->string('tipo_documento', 15);
            $table->bigInteger('cedula');
            $table->string('nombres', 50);
            $table->string('apellidos', 50);
            $table->date('fecha');
            $table->string('tipo_examen', 50);
            $table->string('examen_enfasis', 255);
            $table->string('observaciones', 255);
            $table->string('orden_fisica', 50);
            $table->bigInteger('id_files_orden')->index('id_files_orden');
            $table->bigInteger('id_files_resultados')->index('id_files_resultados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_servicio');
    }
};
