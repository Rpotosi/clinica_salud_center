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
        Schema::table('orden_servicio', function (Blueprint $table) {
            $table->foreign(['id_files_resultados'], 'orden_servicio_ibfk_2')->references(['id_files_resultados'])->on('files_resultados');
            $table->foreign(['id_files_orden'], 'orden_servicio_ibfk_1')->references(['id_files_orden'])->on('files_orden');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orden_servicio', function (Blueprint $table) {
            $table->dropForeign('orden_servicio_ibfk_2');
            $table->dropForeign('orden_servicio_ibfk_1');
        });
    }
};
