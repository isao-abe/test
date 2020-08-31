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
        DB::table('users')->insert([
            'name' => "Isao Abe",
            'email' => 'is.abe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "Lee Daegun",
            'email' => 'de.lee@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "Ja Luo",
            'email' => 'ja.luo@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "Mariko Hino",
            'email' => 'mr.hino@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
