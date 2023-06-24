<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JenisSekolah;
use App\Models\role;
use App\Models\Tentang;
use App\Models\User;
use Illuminate\Database\Seeder;

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


        // Membuat USER

        role::create([
            'role' => 'admin'
        ]);

        role::create([
            'role' => 'user'
        ]);

        //Membuat User

        User::create([
            'name'=> 'Putri Okta',
            'email'=> 'putri@gmail.com',
            'password'=> bcrypt('12345'),
            'role_id'=> 1
        ]);

        User::create([
            'name'=> 'Atha Faris',
            'email'=> 'faris@gmail.com',
            'password'=> bcrypt('12345'),
            'role_id'=> 2
        ]);
        

        //Membuat Jenis sekolah

        JenisSekolah::create([
            'id' => '1',
            'jenis_sekolah' => 'PAUD'
        ]);

        JenisSekolah::create([
            'id' => '2',
            'jenis_sekolah' => 'SD'
        ]);

        JenisSekolah::create([
            'id' => '3',
            'jenis_sekolah' => 'SMP'
        ]);

    }

}
