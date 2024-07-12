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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('RoleID')->nullable()->constrained('roles')->after('password');
            $table->foreignId('DepartmentID')->nullable()->constrained('departments')->after('CompanyID');
            $table->boolean('AuthenticStatus')->default(false)->after('DepartmentID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['RoleID']);
            $table->dropForeign(['DepartmentID']);
            $table->dropColumn(['RoleID', 'CompanyID', 'DepartmentID', 'AuthenticStatus']);
        });
    }
};
