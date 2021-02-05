<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration {

    private $databaseName = "empresa";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->text("cif");
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
            $table->primary("cif");
            $table->text("nif_representante");
            $table->foreign("nif_representante")->cascadeOnDelete()->references("nif")->on("representante");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}