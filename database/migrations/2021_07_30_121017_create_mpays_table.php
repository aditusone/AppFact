<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpays', function (Blueprint $table) {
            $table->id();
            $table->string('moneda',10);  #Nombre de la Moneda(Bolivar, Dolar, Euro, etc)
            $table->string('S_moneda',10); # Simbolo BsS, USD, EURO
            $table->string('T_Moneda',20);  # Metodo de pago utilizado (Zelle,Transferencia)
            $table->string('Medio_moneda',15);  #Se especifica si es en efectivo, medio electronico,o medios alternos(Mercancia,intercambios, etc)
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
        Schema::dropIfExists('mpays');
    }
}
