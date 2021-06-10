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
            [                
                'name' => "ジェシー",
                'email' => "a@bcd",
                "password" => bcrypt("qwert"),                
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [                
                'name' => "サム",
                'email' => "b@bce",
                "password" => bcrypt("asdfg"), 
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),               
            ],
            ]);
    }
}
