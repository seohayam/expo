<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreOwnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store_owners')->insert(
        [
            [                
                'name' => "kyameron",
                'email' => "example@example1",
                "password" => bcrypt("asdfgfafsa2e2379279324fashfihsfhdfiahjkl"),                
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [                
                'name' => "same",
                'email' => "example@example2",
                "password" => bcrypt("fafjsajfaflalkjfdsjfoajfiefe382492jkakkaoj"), 
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),               
            ],
        ]);
    }
}
