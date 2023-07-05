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
        Schema::create('event_organizers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->string('nik');
            $table->string('address');
            $table->string('city');
            $table->string('ktp');
            $table->string('phone_number');
            $table->string('photo');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('twitter');
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_organizers');
    }
};