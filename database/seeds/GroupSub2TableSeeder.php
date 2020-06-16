<?php

use App\Group_sub2;
use Illuminate\Database\Seeder;

class GroupSub2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group_sub2::truncate();
        factory(Group_sub2::class,10)->create();
    }
}
