<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. ADMIN
        User::create([
            'username' => 'admin',
            'name' => 'Administrator',
            'email' => 'admin@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'admin',
            'gender' => 'male',
            'birth_date' => '1990-01-01',
            'phone' => '081234567890',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Admin No. 1, Jakarta',
            'study_program' => null,
            'position' => 'Kepala Helpdesk',
        ]);

        // 2. PETUGAS / OPERATOR
        User::create([
            'username' => 'petugas1',
            'name' => 'Budi Santoso',
            'email' => 'petugas@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'petugas',
            'gender' => 'male',
            'birth_date' => '1992-05-15',
            'phone' => '081234567891',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Petugas No. 5, Jakarta',
            'study_program' => null,
            'position' => 'Teknisi Helpdesk',
        ]);

        // 3. MAHASISWA (Laki-laki)
        User::create([
            'username' => 'mahasiswa1',
            'name' => 'Ahmad Rizki',
            'email' => 'mahasiswa@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'male',
            'birth_date' => '2000-08-20',
            'phone' => '081234567892',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Kampus No. 10, Depok',
            'study_program' => 'Teknik Informatika',
            'position' => null,
        ]);

        // 4. MAHASISWA (Perempuan)
        User::create([
            'username' => 'mahasiswa2',
            'name' => 'Siti Aisyah',
            'email' => 'mahasiswi@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'female',
            'birth_date' => '2001-03-10',
            'phone' => '081234567893',
            'faculty' => 'Fakultas Ekonomi',
            'address' => 'Jl. Mawar No. 7, Depok',
            'study_program' => 'Manajemen',
            'position' => null,
        ]);

        // 5. DOSEN (Perempuan)
        User::create([
            'username' => 'dosen1',
            'name' => 'Dr. Rina Wijaya',
            'email' => 'dosen@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'dosen',
            'gender' => 'female',
            'birth_date' => '1985-12-01',
            'phone' => '081234567894',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Guru No. 3, Depok',
            'study_program' => 'Teknik Informatika',
            'position' => 'Dosen Tetap',
        ]);

        // 6. MAHASISWA LAIN (Laki-laki)
        User::create([
            'username' => 'mahasiswa3',
            'name' => 'Rizky Pratama',
            'email' => 'rizky@example.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'male',
            'birth_date' => '2002-07-22',
            'phone' => '081234567895',
            'faculty' => 'Fakultas Ilmu Komputer',
            'address' => 'Jl. Melati No. 12, Jakarta',
            'study_program' => 'Sistem Informasi',
            'position' => null,
        ]);

        // 7. MAHASISWA LAIN (Perempuan)
        User::create([
            'username' => 'mahasiswa4',
            'name' => 'Nurul Hikmah',
            'email' => 'nurul@example.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'female',
            'birth_date' => '2001-11-05',
            'phone' => '081234567896',
            'faculty' => 'Fakultas Hukum',
            'address' => 'Jl. Merdeka No. 8, Jakarta',
            'study_program' => 'Ilmu Hukum',
            'position' => null,
        ]);

        // 8. TENAGA KEPENDIDIKAN (Laki-laki)
        User::create([
            'username' => 'staff1',
            'name' => 'Agus Setiawan',
            'email' => 'staff@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'staff',
            'gender' => 'male',
            'birth_date' => '1988-04-18',
            'phone' => '081234567897',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Kenanga No. 15, Depok',
            'study_program' => null,
            'position' => 'Staff Administrasi',
        ]);

        // 9. MAHASISWA TEST (Laki-laki)
        User::create([
            'username' => 'testuser',
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'male',
            'birth_date' => '2000-01-01',
            'phone' => '081234567898',
            'faculty' => 'Fakultas Teknik',
            'address' => 'Jl. Testing No. 99, Jakarta',
            'study_program' => 'Teknik Komputer',
            'position' => null,
        ]);

        // 10. MAHASISWA TEST (Perempuan)
        User::create([
            'username' => 'testuser2',
            'name' => 'Siti Aminah',
            'email' => 'aminah@example.com',
            'password' => Hash::make('password123'),
            'user_type' => 'user',
            'gender' => 'female',
            'birth_date' => '2001-06-15',
            'phone' => '081234567899',
            'faculty' => 'Fakultas Ekonomi',
            'address' => 'Jl. Anggrek No. 5, Jakarta',
            'study_program' => 'Akuntansi',
            'position' => null,
        ]);
    }
}