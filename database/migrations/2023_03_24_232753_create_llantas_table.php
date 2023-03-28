<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('llantas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->float('precio');
            $table->string('imagen');

            $table->bigInteger('vehiculo_id')->unsigned();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete("cascade");
            
            $table->bigInteger('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete("cascade");
          
            $table->bigInteger('rodada_id')->unsigned();
            $table->foreign('rodada_id')->references('id')->on('rodadas')->onDelete("cascade");

            $table->bigInteger('medida_id')->unsigned();
            $table->foreign('medida_id')->references('id')->on('medidas')->onDelete("cascade");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llantas');
    }
};
