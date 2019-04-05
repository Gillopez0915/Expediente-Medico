<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave_expediente')->unique();
            $table->string('ccurp', 18);
            $table->string('capaterno');
            $table->string('camaterno')->nullable();
            $table->string('cnombre');
            $table->string('cnumexpediente')->nullable();
            $table->string('cnoseguropopular')->nullable();
            $table->string('cderechohabiencia')->nullable();
            $table->string('ctiposp')->nullable();
            $table->date('fchnacimiento');
            $table->char('csexo', 1);
            $table->string('cdireccion')->nullable();
            $table->string('itelefono')->nullable();
            $table->integer('iprospera');
            $table->integer('iindigena');
            $table->integer('imigrante');
            $table->integer('idiscapacitado');
            $table->string('cusuario');
            $table->integer('ilengua');
            $table->integer('ireligion');
            $table->integer('inacionalidad');
            $table->integer('ilugarnac');
            $table->integer('ientidad');
            $table->integer('imunicipio');
            $table->integer('ilocalidad');
            $table->string('ctelefono2');
            $table->integer('idiscapacidadg');
            $table->integer('idiscapacidadm');
            $table->integer('isegpop');
            $table->string('cmail')->nullable();
            $table->string('cocupacion')->nullable();
            $table->integer('iescolaridad')->nullable();
            $table->integer('icivil')->nullable();
            $table->date('fchiniprospera')->nullable();
            $table->string('cfolioprospera')->nullable();
            $table->string('cfolioimss')->nullable();
            $table->string('cfolioissste')->nullable();
            $table->string('cdireccion2')->nullable();
            $table->string('cfoliootra')->nullable();
            $table->integer('idcol')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('iactivo')->default(1);
            $table->string('ctipo_asentamiento')->nullable();
            $table->string('cnombre_asentamiento')->nullable();
            $table->integer('ccodigo_postal')->nullable();
            $table->integer('idesconocido')->nullable();
            $table->string('cmotivo')->nullable();
            $table->string('cclues', 15);
            $table->string('igestacional')->nullable();
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
        Schema::dropIfExists('paciente');
    }
}
