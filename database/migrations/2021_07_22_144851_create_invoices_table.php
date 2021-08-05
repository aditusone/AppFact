<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_providers");
            $table->foreign("id_providers")
                ->references("id")
                ->on("providers")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->string('Nro_fact', 20)->unique()->required();
            $table->string('nro_control',20);
            $table->date('fecha_reg');
            $table->date('fecha_nod');   # Identificar que fecha se registrara
            $table->date('fecha_emi');
            $table->date('fecha_ven');
            $table->string('tipo',10);      # Tipo de Factura (un Servicio o un Bien )
            $table->string('Doc_ent',10);   # Documento entregado (Original o copia)
            $table->string('Status', 20);   # Estado de la factura (Pagada o Registrada)
            $table->string('T_Moneda',10);  # Tipo demoneda (Bs, $, Zelle)
            $table->decimal('base_fac',9,2);
            $table->decimal('pagado',9,2);
            $table->decimal('deuda',9,2);
            $table->decimal('total',10,2);
            $table->string('Observaciones',100);
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
        Schema::dropIfExists('invoices');
    }
}
