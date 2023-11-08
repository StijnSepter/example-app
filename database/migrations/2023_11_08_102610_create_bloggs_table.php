<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bloggs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->text('url');
            $table->text('user');
            $table->text('icon');
            $table->text('icon_name');
            $table->text('icon_tekt');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('bloggs');
    }
};
