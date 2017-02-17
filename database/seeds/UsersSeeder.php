<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'firstname' => 'Mattias',
            'lastname' => 'Delang',
            'email' => 'mattiasdelang@gmail.com',
            'street' => 'ophemstraat',
            'number' => 92,
            'city' => 'oud-heverlee',
            'postcode' => 3050,
            'password' => bcrypt('temptest'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
