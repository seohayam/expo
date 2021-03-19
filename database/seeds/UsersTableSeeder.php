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
        DB::table('users')->insert(
            [                
                'name' => "kame",
                'email' => "a@bcd",
                "password" => bcrypt("qwert"),                
            ],
            [                
                'name' => "same",
                'email' => "b@bcd",
                "password" => bcrypt("asdfg"),                
            ],
            [                
                'name' => "tome",
                'email' => "c@bcd",
                "password" => bcrypt("zxcvb"),                
            ]
        );
    }
}
