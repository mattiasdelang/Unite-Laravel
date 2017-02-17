<?php

use Illuminate\Database\Seeder;

class CommunitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('communities')->insert([
            [
                'name' => 'Ophemstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Dorpstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Groenstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Bosstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Fontijnstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Rozenbergstraat',
                'userId' => 1,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString()
            ],
        ]);
    }
}
