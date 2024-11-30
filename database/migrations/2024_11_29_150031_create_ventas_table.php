<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');;
            $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');;
            $table->foreignId('auto_id')->constrained('autos')->onDelete('cascade');;
            $table->foreignId('seguro_id')->constrained('seguros')->onDelete('cascade');;
            $table->date('fecha_venta');
            $table->decimal('factura_venta', 10,2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
