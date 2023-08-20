<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [   
            [
                'name'      => 'Pengurus',
                'email'     => 'pengurus@gmail.com',
                'username' => 'pengurus',
                'password'  => bcrypt('Pengurus12'),
                'level' => 1,
            ],            
            [
                'name'      => 'Penghuni',
                'email'     => 'penghuni@gmail.com',
                'username' => 'penghuni',
                'password'  => bcrypt('Penghuni12'),
                'level' => 2,
            ],                    
            [
                'name'      => 'Calon Penghuni',
                'email'     => 'calonpenghuni@gmail.com',
                'username' => 'calon penghuni',
                'password'  => bcrypt('Calonpenghuni12'),
                'level' => 3,
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
