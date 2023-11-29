<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->double('precio');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
