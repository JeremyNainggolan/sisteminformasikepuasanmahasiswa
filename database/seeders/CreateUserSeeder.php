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
                'nim' => '12S22008',
                'name' => 'Rahel Simanjuntak',
                'email' => 'rahelsimanjuntak2909@gmail.com',
                'username' => 'rahelsimanjuntak2909',
                'phonenumber' => '082166796689',
                'type' => 0,
                'password' => Hash::make('simanjuntak123'),
            ),
            array(
                'nim' => '12S22021',
                'name' => 'Krisnia Siahaan',
                'email' => 'krisniacalysta@gmail.com',
                'username' => 'krisniasiahaan',
                'phonenumber' => '081362078866',
                'type' => 0,
                'password' => Hash::make('krisnia123'),
            ),
            array(
                'nim' => '12S22040',
                'name' => 'Gracia Purba',
                'email' => 'graciapurba278@gmail.com',
                'username' => 'graciapurba27',
                'phonenumber' => '082298630250',
                'type' => 0,
                'password' => Hash::make('graciapurba123'),
            ),
            array(
                'nim' => '12S22002',
                'name' => 'Jeremy Nainggolan',
                'email' => 'jeremy.nainggolann@gmail.com',
                'username' => 'mart.jeremiah',
                'phonenumber' => '085171679411',
                'type' => 1,
                'password' => Hash::make('admin123'),
            ),
        );

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
