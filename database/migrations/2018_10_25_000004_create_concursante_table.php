<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcursanteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'concursante';

    /**
     * Run the migrations.
     * @table concursante
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 50)->nullable()->default(null);
            $table->string('apaterno', 45)->nullable()->default(null);
            $table->string('amaterno', 45)->nullable()->default(null);
            $table->string('email', 50);
            $table->string('nickname', 45);
            $table->string('password', 100);
            $table->unsignedInteger('id_carrera');
            $table->unsignedInteger('id_escuela');
            $table->unsignedInteger('id_personaje');

            $table->index(["id_carrera"], 'id_carrera1');

            $table->index(["id_escuela"], 'id_escuela1');

            $table->index(["id_personaje"], 'id_personaje1');

            $table->unique(["nickname"], 'concursante_nickname_uindex');

            $table->unique(["email"], 'concursante_email_uindex');


            $table->foreign('id_personaje', 'id_personaje1')
                ->references('id')->on('personaje')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_carrera', 'id_carrera1')
                ->references('id')->on('carrera')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_escuela', 'id_escuela1')
                ->references('id')->on('escuela')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
