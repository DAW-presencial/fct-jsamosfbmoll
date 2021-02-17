<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDeTrabajoTable extends Migration {

    private $databaseName = "centros_de_trabajo";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->id();
            $table->text("nombre_centro");
            $table->text("direccion");
            $table->text("codigo_postal");
            $table->text("actividad");
            $table->integer("numero_trabajadores");
            $table->text("email");
            $table->text("tipo_de_jornada");
            $table->text("numero_tel_1");
            $table->text("numero_tel_2");
            $table->text("nif_coordinador");
            $table->text("cif_empresa");
            $table->foreignId("coordinador_id")->references("id")->on("coordinadores");
            $table->foreignId("empresa_id")->references("id")->on("empresas");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}