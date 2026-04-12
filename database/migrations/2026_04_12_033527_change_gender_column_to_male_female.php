<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            
            DB::statement("ALTER TABLE users MODIFY gender ENUM('male', 'female') NOT NULL");
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            DB::statement("ALTER TABLE users MODIFY gender ENUM('L', 'P') NOT NULL");
        });
    }
};