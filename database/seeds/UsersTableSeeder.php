<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
          'name' => 'shakim harris',
          'email' => 'amenraprod@gmail.com',
          'password' => bcrypt('password')
        ]);

        App\Profile::create([
          'user_id' => $user->id,
          'avatar' => 'link to image',
          'gender' => 'male',
          'phone' => '3134012187',
          'dob' => '04/13/1995',
          'age' => '22'
        ]);
    }
}
