<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'fullname' => 'Anthony Mizal',
                'gender' => 'Male',
                'status' => 'Active',
                'role' => 'Admin',
                'email' => 'anthony@gmail.com',
                'username' => 'gcwentoadmin',
                'password' => bcrypt('12345')
            ],
            [
                'fullname' => 'Thea Isip',
                'gender' => 'Female',
                'status' => 'Active',
                'role' => 'User',
                'email' => 'thea@gmail.com',
                'username' => 'thea123',
                'password' => bcrypt('12345')
            ],
            [
                'fullname' => 'Nathaniel Ribada',
                'gender' => 'Male',
                'status' => 'Active',
                'role' => 'User',
                'email' => 'nathaniel@gmail.com',
                'username' => 'nath123',
                'password' => bcrypt('12345')
            ],
            ]);
    }
}
