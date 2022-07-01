<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'position' => 'Direktur',
        ]);

        Position::create([
            'position' => 'Personalia',
        ]);

        Position::create([
            'position' => 'Karyawan',
        ]);

        User::create([
            'name' => 'Budi Prasetya',
            'place_of_birth' => 'Malang',
            'date_of_birth' => '1990-10-12',
            'religion' => 'Islam',
            'address' => 'Jln. Tatang No.12, Sumbersari, Malang',
            'phone' => '085123456789',
            'position_id' => '1',
            'email' => 'budipras1@gmail.com',
            'password' => bcrypt('budi12345'),
        ]);

        User::create([
            'name' => 'Udin P.',
            'place_of_birth' => 'Kediri',
            'date_of_birth' => '1989-11-01',
            'religion' => 'Islam',
            'address' => 'Jln. Pucung No.01, Pati, Kediri',
            'phone' => '085123456789',
            'position_id' => '2',
            'email' => 'udinp@gmail.com',
            'password' => bcrypt('udin12345'),
        ]);
        
        User::create([
            'name' => 'Arman B.',
            'place_of_birth' => 'Jambi',
            'date_of_birth' => '1992-03-15',
            'religion' => 'Katolik',
            'address' => 'Jln. Jawa No.01, Sumber, Malang',
            'phone' => '087775098345',
            'position_id' => '3',
            'email' => 'armanb@gmail.com',
            'password' => bcrypt('arman12345'),
        ]);
    }
}
