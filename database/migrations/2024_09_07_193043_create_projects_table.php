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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('budget', 10, 2);
            $table->date('deadline');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who created the project
            $table->foreignId('engineer_id')->nullable()->constrained('users')->onDelete('set null'); // Assigned engineer
            $table->foreignId('company_id')->nullable()->constrained('users')->onDelete('set null'); // Assigned company
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
