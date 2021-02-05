<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration {

    private $databaseName = "tutor";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->text("nif");
            $table->text("nombre");
            $table->text("puesto_trabajo");
            $table->primary("nif");
            $table->bigInteger("id_centro_trabajo");
            $table->foreign("id_centro_trabajo")->cascadeOnDelete()->references("id")->on("centro_de_trabajo");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}