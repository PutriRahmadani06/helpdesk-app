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
            'fakultas' => null,
            'prodi' => null,
            'gender' => 'male',
            'phone' => '081234567890',
            'address' => 'Jl. Admin No. 1, Jakarta',
            'birth_date' => '1990-01-01',
            'profile_completed' => 1,
        ]);

        // 2. MAHASISWA
        User::create([
            'username' => '20200101001',
            'name' => 'Ahmad Rizki',
            'email' => 'mahasiswa@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'mahasiswa',
            'fakultas' => 'Fakultas Teknik',
            'prodi' => 'Teknik Informatika',
            'gender' => 'male',
            'phone' => '081234567891',
            'address' => 'Jl. Kampus No. 10, Depok',
            'birth_date' => '2000-08-20',
            'profile_completed' => 1,
        ]);

        // 3. MAHASISWI (profile belum lengkap untuk testing)
        User::create([
            'username' => '20200101002',
            'name' => 'Siti Aisyah',
            'email' => 'mahasiswi@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'mahasiswa',
            'fakultas' => 'Fakultas Ekonomi',
            'prodi' => 'Manajemen',
            'gender' => 'female',
            'phone' => null,
            'address' => null,
            'birth_date' => null,
            'profile_completed' => 0,
        ]);

        // 4. PEGAWAI ASN
        User::create([
            'username' => '198512012010012001',
            'name' => 'Dr. Rina Wijaya',
            'email' => 'asn@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'pegawai_asn',
            'fakultas' => 'Fakultas Teknik',
            'prodi' => 'Teknik Informatika',
            'gender' => 'female',
            'phone' => '081234567892',
            'address' => 'Jl. Dosen No. 5, Depok',
            'birth_date' => '1985-12-01',
            'profile_completed' => 1,
        ]);

        // 5. PEGAWAI NON ASN
        User::create([
            'username' => '3175010101000001',
            'name' => 'Agus Setiawan',
            'email' => 'nonasn@helpdesk.com',
            'password' => Hash::make('password123'),
            'user_type' => 'pegawai_non_asn',
            'fakultas' => null,
            'prodi' => null,
            'gender' => 'male',
            'phone' => '081234567893',
            'address' => 'Jl. Pegawai No. 8, Jakarta',
            'birth_date' => '1988-04-18',
            'profile_completed' => 1,
        ]);

        // 6. MAHASISWA BARU (profile belum lengkap untuk testing middleware)
        User::create([
            'username' => '20209999001',
            'name' => 'Test User Baru',
            'email' => 'testbaru@example.com',
            'password' => Hash::make('password123'),
            'user_type' => 'mahasiswa',
            'fakultas' => 'Fakultas Teknik',
            'prodi' => 'Teknik Komputer',
            'gender' => null,
            'phone' => null,
            'address' => null,
            'birth_date' => null,
            'profile_completed' => 0,
        ]);
    }
}