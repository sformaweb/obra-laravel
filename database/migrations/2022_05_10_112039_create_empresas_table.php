<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('localidade');
            $table->string('poboacion');
            $table->string('actividade');
            $table->integer('telefono');
            $table->string('fax');
            $table->date('data_incorporacion');
            $table->string('persoa_contacto');
            $table->enum('orientador', ['Alberte', 'Eva', 'Maika']);
            $table->integer('ofertas_contratacion');
            $table->integer('ofertas_formacion');
            $table->text('notas');
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
        Schema::dropIfExists('empresas');
    }
}
