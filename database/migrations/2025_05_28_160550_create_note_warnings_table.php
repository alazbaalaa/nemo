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
        Schema::create('note_warnings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_volunteer');
            $table->unsignedBigInteger('id_admin');
            $table->enum('Type', ['note', 'warring']);
            $table->text('Content')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();

            $table->foreign('id_volunteer')->references('id')->on('volunteers')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_warnings');
    }
};
