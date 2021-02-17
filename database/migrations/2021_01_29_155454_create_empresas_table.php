<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration {

    private $databaseName = "empresas";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->id();
            $table->text("cif")->nullable(false)->unique();
            $table->text("nombre");
            $table->text("direccion");
            $table->text("poblacion");
            $table->text("codigo_postal");
            $table->text("fax");
            $table->text("email");
            $table->text("sector_productivo");
            $table->text("actividad_principal");
            $table->text("titularidad");
            $table->text("numero_tel_1");
            $table->text("numero_tel_2");
            $table->foreignId("representante_id")->references("id")->on("representantes");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}