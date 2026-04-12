<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Kolom baru (NOT NULL)
            $table->string('username')->unique()->after('id');           // username unik
            $table->string('user_type')->default('user')->after('email'); // admin/user/petugas
            $table->enum('gender', ['L', 'P'])->after('user_type');      // Laki-laki / Perempuan
            $table->date('birth_date')->after('gender');                  // Tanggal lahir
            $table->string('phone', 15)->after('birth_date');             // Nomor HP
            $table->string('faculty')->after('phone');                    // Fakultas
            $table->text('address')->after('faculty');                    // Alamat rumah
            
            // Kolom yang boleh NULL
            $table->string('study_program')->nullable()->after('address'); // Prodi
            $table->string('position')->nullable()->after('study_program'); // Jabatan
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username', 'user_type', 'gender', 'birth_date', 
                'phone', 'faculty', 'address', 'study_program', 'position'
            ]);
        });
    }
};