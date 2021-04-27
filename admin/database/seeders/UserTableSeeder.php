<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Admin',
            'gender' => 'male',
            'email' => 'admin@xyz.com',
            'phone' => '8470004965',
            'role_id' => 1,
            'password' => Hash::make('password')
        ]);
        User::create([
            'first_name' => 'Company',
            'gender' => 'male',
            'email' => 'company@xyz.com',
            'phone' => '8470004966',
            'role_id' => 2,
            'password' => Hash::make('password')
        ]);
        User::create([
            'first_name' => 'User',
            'gender' => 'male',
            'email' => 'user@xyz.com',
            'phone' => '8470004967',
            'password' => Hash::make('password')
        ]);
        Company::create([
            'user_id' => 2,
            'name' => 'BlueCode'
        ]);
    }
}
