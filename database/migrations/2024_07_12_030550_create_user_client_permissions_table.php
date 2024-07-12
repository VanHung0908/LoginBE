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
        Schema::create('user_client_permissions', function (Blueprint $table) {
            $table->foreignId('EmpID')->constrained('users');
            $table->foreignId('ClientID')->constrained('client_profiles');
            $table->boolean('Create');
            $table->boolean('Read');
            $table->boolean('Update');
            $table->boolean('Delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_client_permissions');
    }
};
