<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array(
                'nim' => 'iss22008',
                'name' => 'Rahel Simanjuntak',
                'email' => 'rahelsimanjuntak2909@gmail.com',
                'type' => 0,
                'password' => Hash::make('simanjuntak123'),
            ),
            array(
                'nim' => 'iss22021',
                'name' => 'Krisnia Siahaan',
                'email' => 'krisniacalysta@gmail.com',
                'type' => 0,
                'password' => Hash::make('krisnia123'),
            ),
            array(
                'nim' => 'iss22040',
                'name' => 'Gracia Purba',
                'email' => 'graciapurba278@gmail.com',
                'type' => 0,
                'password' => Hash::make('graciapurba123'),
            ),
            array(
                'nim' => 'iss22002',
                'name' => 'Jeremy Nainggolan',
                'email' => 'jeremy.nainggolann@gmail.com',
                'type' => 1,
                'password' => Hash::make('admin123'),
            ),
        );

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
