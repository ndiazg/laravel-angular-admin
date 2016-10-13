<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 1,
            'name' => 'Monsters, Inc',
            'email' => 'info@monsters.com',
            'phone' => '3214321321',
            'fax' => '3214321321',
            'fein' => '12-345-678',
            'address_1' => '123 Hollywood St',
            'address_2' => 'Ste 123',
            'city' => 'Hollywood',
            'state' => 'CA',
            'zip' => '54321',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
