<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<=10;$i++) {
            DB::table('users')->insert([
                'name' => \Illuminate\Support\Str::random(10),
                'address' =>\Illuminate\Support\Str::random(10),
                'phone' => \Illuminate\Support\Str::random(10),
                'email' => \Illuminate\Support\Str::random(10) . '@gmail.com',
                'password' => bcrypt('password'),
                'role'=>1
            ]);
        }
    }
}
