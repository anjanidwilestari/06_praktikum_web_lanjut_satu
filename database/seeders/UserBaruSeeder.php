<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'username' => 'admin',
                    'name' => 'Administrator Baru',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('password')
            ]
        ];
        \DB::table('users')->insert($data);
    }
}
