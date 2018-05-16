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
                factory(App\User::class, 9)->create();

                App\User::create([

                	'email' => 'mystogan098@gmail.com',
        			'password' => bcrypt('secret'),
        			'is_admin' => 1,

                ]);
    }
}
