<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAdministrator extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'role' => 'super_admin',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'name' => 'admin3',
            'email' => 'admin3@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
    }
}
