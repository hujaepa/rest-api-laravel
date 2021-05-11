<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++) {
            DB::table('users')->insert([
                'name' => "User ".$i,
                'email' => "user".$i.'@test.com',
                'password' => Hash::make("password")
            ]);
        }
    }
}
