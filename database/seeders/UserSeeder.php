<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data=[
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]
        ];
        \DB::table('users')->insert($data);
    }
}
