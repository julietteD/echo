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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('name');
            $table->text('bio')->nullable();
            $table->string('link1')->nullable();
            $table->string('link2')->nullable();
            $table->string('linkFacebook')->nullable();
            $table->string('linkX')->nullable();
            $table->text('spotify')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
