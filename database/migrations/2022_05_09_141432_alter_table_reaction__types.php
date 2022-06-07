<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reaction__types', function (Blueprint $table){
            $table->string('description', 25)->change();
        });

        //composer require doctrine/dbal
        //INICIAR ESte Comando y agregar el unique
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reaction__types', function (Blueprint $table){
            $table->string('description', 100)->change();
        });
    }
};