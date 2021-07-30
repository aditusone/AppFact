<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasas', function (Blueprint $table) {
            $table->id();
            $table->decimal('Euro',9,2);
            $table->decimal('Euro_BCV',9,2);
            $table->decimal('Dolar',9,2);
            $table->decimal('Dolar_BCV',9,2);
            $table->decimal('Paypal',9,2);
            $table->decimal('Zelle',9,2);
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
        Schema::dropIfExists('tasas');
    }
}
