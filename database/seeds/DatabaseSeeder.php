<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(telefilaSuite\Hospital::class,20)->create();  
        factory(telefilaSuite\User::class,10)->create();  
    }
}
