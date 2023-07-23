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
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Columna para asociar los registros con el usuario que los crea
        $table->string('title'); // Columna para el título
        $table->string('slug')->unique(); // Columna para una url amigable (UNIQUE)
        $table->text('content'); // Columna para el contenido
        $table->timestamps();

        // Establecer la relación con la tabla 'users'
        $table->foreign('user_id')->references('id')->on('users');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
