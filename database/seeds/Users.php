<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // $faker = new Faker(); // si se quiere hacer con datos random
//Un seeder permite que se guarden/almacenen datos por default que la aplication debe tener pe. catalogos, conf. de usuarios.
DB::table('users')->insert([
          // 'name' => str_random(10),
          // 'name' => $faker->name,
          'name' => 'Admin',
          // 'email' => str_random(10).'@gmail.com',
          'email' =>'admin@proyecto.com',
          'password' => bcrypt('admin2016'),
      ]);
    }
}
