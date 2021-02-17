<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration {

    private $databaseName = "representantes";
    
    public function up() {
        Schema::create($this->databaseName, function(Blueprint $table) {
            $table->id();
            $table->text("nif")->nullable(false)->unique();
            $table->text("nombre");
        });
    }

    public function down() {
        Schema::dropIfExists($this->databaseName);
    }

}