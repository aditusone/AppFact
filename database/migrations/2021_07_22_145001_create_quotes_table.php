<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_invoices");
            $table->foreign('id_invoices')
                    ->references("id")
                    ->on("invoices")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
            $table->string('numero',11);
            $table->string('T_Moneda',10);           # Tipo demoneda (Bs, $, Zelle)
            $table->date('Fecha');
            $table->decimal('total',9,2);
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
        Schema::dropIfExists('quotes');
    }
}
