<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); // Foreign key to projects table
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table (engineer or company)
            $table->decimal('bid_amount', 10, 2); // The bid amount
            $table->text('description')->nullable(); // Optional bid description
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('bids');
    }
};
