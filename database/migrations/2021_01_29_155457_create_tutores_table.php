<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration {

    private $databaseName = "tutores";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->id();
            $table->text("nif")->nullable(false)->unique();
            $table->text("nombre");
            $table->text("puesto_trabajo");
            $table->foreignId("centro_de_trabajo_id")->references("id")->on("centros_de_trabajo");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}