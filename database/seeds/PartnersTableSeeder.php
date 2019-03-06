<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_partners')->insert([
            'first_name' => 'Almeida',
            'last_name' => 'Flores',
            'email' => 'almeida@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '10',
            'currency' => 'BTC',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Adhitama',
            'last_name' => 'Vickery',
            'email' => 'vickery@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '15',
            'currency' => 'ETH',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Hermano',
            'last_name' => 'Gun',
            'email' => 'hermano@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Jimmy',
            'last_name' => 'Gun',
            'email' => 'jimmyg@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Jimmy',
            'last_name' => 'Gun',
            'email' => 'jimmygu@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Sergei',
            'last_name' => 'Dragunov',
            'email' => 'dragunov@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Elton',
            'last_name' => 'McKinsey',
            'email' => 'elton@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);
        
    }
}
