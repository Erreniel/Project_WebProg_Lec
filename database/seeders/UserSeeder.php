<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Shannya',
            'email' => 'shannya@email.com',
            'dob' => '2002-04-16',
            'password' => Hash::make('shannyaasd'),
            'role' => 'Admin'
        ]);
    }
}
