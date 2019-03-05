<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_users')->insert([
            'name' => 'Adhitama Fikri',
            'username' => 'adhitamafikri',
            'email' => 'adhitamafikri@cms.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
