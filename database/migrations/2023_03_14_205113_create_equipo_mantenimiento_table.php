<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoMantenimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo_mantenimiento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('mantenimiento_id')->nullable();
            $table->timestamps();

            $table->foreign('equipo_id')->references('id')
            ->on('equipos')
            ->onDelete('set null');
            $table->foreign('mantenimiento_id')->references('id')
            ->on('mantenimientos')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo_mantenimiento');
    }
}
