<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Administrator',
                'role' => 'A',
                'email' => 'admin',
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' =>  Hash::make('admin'),
            ]
        );
        DB::table('users')->insert(
            [
                'id' => 2,
                'name' => 'User',
                'role' => 'U',
                'email' => 'user',
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'password' =>  Hash::make('user'),
            ]
        );
    }
}
