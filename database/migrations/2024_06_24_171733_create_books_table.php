<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up(): void
        {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('titulo');
                $table->string('subtitulo');
                $table->string('autor');
                $table->string('edicao');
                $table->string('editora');
                $table->year('ano_de_publicacao');
                $table->timestamps();

            });
        }
    
        public function down(): void
        {
            Schema::dropIfExists('books');
        }
};