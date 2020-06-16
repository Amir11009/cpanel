<?php

use App\Group_main;
use Illuminate\Database\Seeder;

class GroupMainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group_main::truncate();
        factory(Group_main::class,5)->create();
    }
}
