<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_invoices");
            $table->foreign('id_invoices')
                ->references("id")
                ->on("invoices")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string('N_Contrato',10);            # Numero de Contrato asociado
            $table->string('T_Moneda',10);              # Tipo demoneda (Bs, $, Zelle)
            $table->decimal('monto_otorgado', 9, 2);    # Monto del anticipo otorgado (en caso de que aplique)
            $table->string('M_Pago',10);                # Metodo de Pago (Efectivo, Transferencia, Pago Electronico, Bs, $, Zelle)
            $table->date('Fecha');
            $table->integer('Nro_oper');
            $table->string('Banco', 20);
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
        Schema::dropIfExists('advances');
    }
}
