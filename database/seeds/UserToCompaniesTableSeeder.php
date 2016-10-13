<?php

use Illuminate\Database\Seeder;

class UserToCompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_companies')->insert([
            'id' => 1,
            'user_id' => 1,
            'company_id' => '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }
}
