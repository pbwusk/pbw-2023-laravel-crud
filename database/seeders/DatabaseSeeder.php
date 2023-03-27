<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'npm' => '404',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        // Ngisi data dump ke tabel Users
        DB::table('users')->insert([
            'name' => 'ABDUL HAFIDH',
            'npm' => '2008107010056',
            'password' => bcrypt('1234'),
            'role' => 'user'
        ]);


        // Ngisi data dump ke tabel Subjects (Mata Kuliah)

        DB::table('subjects')->insert([
            'users_id' => '2',
            'subject_name' => 'Machine Learning',
            'day' => 'Jumat',
            'room' => 'E.03:03',
            'lecturer' => 'Pak Alim Misbullah'
        ]);

        DB::table('subjects')->insert([
            'users_id' => '2',
            'subject_name' => 'Teks Web Mining',
            'day' => 'Selasa',
            'room' => 'E.03:03',
            'lecturer' => 'Prof Taufik Fuadi Abidin'
        ]);


        
    }
}
