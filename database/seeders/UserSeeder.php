<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Asatidz',
                'username' => 'asatidz_petikjo',
                'password' => bcrypt('Ustadz_PeTIK2Jombang'),
                'level' => 'asatidz',
                'email' => 'asatidz@example.com',
            ],
            [
                'name' => 'Santri',
                'username' => 'santri_petikjo',
                'password' => bcrypt('Santri_PeTIK2Jombang'),
                'level' => 'santri',
                'email' => 'santri@example.com',
            ],
        ];

        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
