<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
            [
                'title' => 'mr',
                'name' => 'john',
                'last_name' => 'doe',
                'address' => 'street 123',
                'zip_code' => '06040',
                'city' => 'Tulsa',
                'state' => 'OK',
                'email' => 'john@example.com',
            ]
        );

        DB::table('clients')->insert(
            [
                'title' => 'mrs',
                'name' => 'jane',
                'last_name' => 'doe',
                'address' => 'anoterh stree 465',
                'zip_code' => '06464',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'email' => 'jane@example.com',
            ]
        );
    }
}
