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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->nullable();
            $table->string('keyPerson')->nullable();
            $table->bigInteger('contact')->unique()->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('customerType')->nullable();
            $table->string('productType')->nullable();
            $table->string('purchasePlan')->nullable();
            $table->integer('suggestedModel')->nullable();
            $table->integer('reference')->nullable();
            $table->date('date')->nullable();
            $table->integer('token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
