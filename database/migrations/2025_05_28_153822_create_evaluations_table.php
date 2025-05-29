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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_volunteer');
            $table->unsignedBigInteger('id_effectiveness');
            $table->unsignedBigInteger('id_admin');
            $table->decimal('evalution', 2, 1); // من 1 إلى 5
            $table->text('notes')->nullable();
            $table->date('evalute_date')->nullable();
            $table->timestamps();

            $table->foreign('id_volunteer')->references('id')->on('volunteers')->onDelete('cascade');
            $table->foreign('id_effectiveness')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('id_admin')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
