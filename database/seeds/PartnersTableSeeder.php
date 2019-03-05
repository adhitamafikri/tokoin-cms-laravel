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
            'first_name' => 'Sentry',
            'last_name' => 'Gun',
            'email' => 'sentry@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '10',
            'currency' => 'BTC',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Maxim',
            'last_name' => 'Gun',
            'email' => 'maxim@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '15',
            'currency' => 'ETH',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Jimmy',
            'last_name' => 'Gun',
            'email' => 'jimmy@gmail.com',
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
            'first_name' => 'Jimmy',
            'last_name' => 'Gun',
            'email' => 'jimmygun@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);

        DB::table('tk_partners')->insert([
            'first_name' => 'Jimmy',
            'last_name' => 'Gun',
            'email' => 'jimmygunn@gmail.com',
            'phone' => '0982462323',
            'wallet_address' => 'o9x9090934jsdkfjskd',
            'amount' => '500000',
            'currency' => 'IDR',
            'document' => 'https://image.ibb.co/cGcWr9/rsz-girl-1.jpg'
        ]);
        
    }
}
