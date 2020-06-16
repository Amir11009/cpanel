<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::truncate();
        factory(Size::class,20)->create();
    }
}
