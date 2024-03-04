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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 64);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->time('departure_time', $precision = 0);
            $table->time('arrivale_time', $precision = 0);
            $table->string('code', 7)->unique();
            $table->tinyInteger('carriages_number')->unsigned()->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
