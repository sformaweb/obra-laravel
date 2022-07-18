<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertats', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 250);
            $table->date('datadende');
            $table->date('dataata');
            $table->string('lugar');
            $table->string('tipo', 100);
            $table->integer('numprazas');
            $table->integer('numhoras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ofertats');
    }
}
