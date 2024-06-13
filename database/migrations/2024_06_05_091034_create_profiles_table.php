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
        Schema::create('profiles', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('phone_number')->nullable();
            $table->enum('gender', ['Laki-laki','Perempuan'])->nullable();
            $table->string('job')->nullable();
            $table->string('source_income')->nullable();
            $table->string('country')->nullable();
            $table->string('last_education')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->text('photo_path')->nullable();
            $table->integer('age')->nullable();
            $table->enum('married_status', ['Lajang','Menikah'])->nullable();
            $table->boolean('premium')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
