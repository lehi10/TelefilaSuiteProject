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
        $j=2;
        $user= new User;
        $user->username="usuario1";
        $user->password=bcrypt('secret');
        $user->rol_id=1;
        $user->nombres=$faker->firstname;
        $user->apellidos=$faker->lastname;
        $user->estado=1;
        $user->save();

        for ($hospital=1; $hospital < 30; $hospital++) { 
            $j=2;
            for ($i=2;$i<10;$i++)
            {
                $user= new User;
                $user->username="usuario".$hospital.$i;
                $user->password=bcrypt('secret');
                $user->rol_id=$j;
                $user->nombres=$faker->firstname;
                $user->apellidos=$faker->lastname;
                $user->hospital_id=$hospital;
                $user->estado=1;
                $user->save();
                if ($i%2==0)
                   $j++;
            }
        }
    }
}
