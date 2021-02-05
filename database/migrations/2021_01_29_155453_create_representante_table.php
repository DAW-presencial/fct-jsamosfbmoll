<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentanteTable extends Migration {

    private $databaseName = "representante";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->text("nif");
            $table->text("nombre");
            $table->primary("nif");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}