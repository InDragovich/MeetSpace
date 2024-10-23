<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('fines', function (Blueprint $table) {
        $table->id('id');
        $table->foreignId('reservation_id')->constrained('reservations')->onDelete('cascade');
        $table->decimal('fine_amount', 10, 2);
        $table->text('reason');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};