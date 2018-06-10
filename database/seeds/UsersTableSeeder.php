<?php

use Illuminate\Database\Seeder;
use telefilaSuite\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker\Factory::create();
        $j=1;
        for ($i=1;$i<8;$i++)
        {
            $user= new User;
            $user->username="usuario".$i;
            $user->password=bcrypt('secret');
            $user->rol_id=$j;
            $user->nombres=$faker->firstname;
            $user->apellidos=$faker->lastname;
            $user->hospital_id=1;
            $user->estado=1;
            $user->save();
            if ($i%2==0)
                $j++;
        }
    }
}
