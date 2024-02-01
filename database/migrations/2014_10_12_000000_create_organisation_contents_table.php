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
        Schema::create('organisation_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->text('intro')->nullable;
            $table->string('titleBox1')->nullable;
            $table->text('contentBox1')->nullable;
            $table->string('titleBox2')->nullable;
            $table->text('contentBox2')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisation_contents');
    }
};
