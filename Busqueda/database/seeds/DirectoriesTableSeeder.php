<?php

use Illuminate\Database\Seeder;

class DirectoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Directory::class, 80)->create();
    }
}
