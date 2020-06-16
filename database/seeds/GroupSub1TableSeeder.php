<?php

use App\Group_sub1;
use Illuminate\Database\Seeder;

class GroupSub1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group_sub1::truncate();
        factory(Group_sub1::class,7)->create();
    }
}
