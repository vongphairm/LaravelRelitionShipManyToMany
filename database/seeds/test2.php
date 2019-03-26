<?php

use Illuminate\Database\Seeder;

class test2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\student::class,10)->create();
    }
}
