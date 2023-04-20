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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->date('availability');
            $table->string('capacity');
            $table->text('description');
            $table->decimal('price');
            $table->enum('room_type', ['vip', 'suite', 'basic']);
            $table->string('rooms');
            $table->set('amenities', ['housekeeping', 'wi-fi', 'parking', 'air-conditioner', 'tv', 'fridge', 'mini-bar', 'sheets', 'towels', 'shampoo and soap', 'hair-dryer', 'breakfast']);
            $table->enum('view', ['ocean-side', 'mountain-side']);
            $table->string('features');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
