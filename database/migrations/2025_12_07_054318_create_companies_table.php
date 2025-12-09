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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('kra_pin')->unique()->nullable();
            //$table->string('logo')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('website')->unique()->nullable();
            $table->string('county')->nullable();
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('postal_address')->nullable();
            $table->string('postal_code')->nullable();
            //$table->text('description')->nullable();
            $table->string('slug')->unique();
            //$table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
