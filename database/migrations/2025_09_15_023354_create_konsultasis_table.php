<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
    Schema::create('konsultasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('keluhan');
        $table->string('poli');
        $table->string('no_telp');
        $table->timestamps();
    });
}

};
