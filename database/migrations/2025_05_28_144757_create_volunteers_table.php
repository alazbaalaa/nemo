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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->unique();
            $table->string('phone_nomber')->unique();
            $table->string('email')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->integer('age')->nullable();
            $table->string('Place_of_residence')->nullable();
            $table->string('Academic_achievement')->nullable();
            $table->text('Profession')->nullable();
            $table->text('skills')->nullable();
            $table->string('profile_image')->nullable();
            $table->enum('status', ['activ', 'freezed', 'stoped'])->default('activ');
            $table->date('Join_date')->nullable();
            $table->integer('number_of_hours')->default(0);
            $table->integer('Number_of_posts')->default(0);
            $table->decimal('Overall_Rating', 3, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};
