<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->nullable();
            $table->string('keyPerson')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('customerType')->nullable();
            $table->string('productType')->nullable();
            $table->string('purchasePlan')->nullable();
            $table->string('suggestedModel')->nullable();
            $table->date('date')->nullable();
            $table->string('reference')->nullable();
            $table->unsignedBigInteger('node_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('node_id')->references('id')->on('notes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['node_id']);
        });
        Schema::dropIfExists('customers');
    }
};
