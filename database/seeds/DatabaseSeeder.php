<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(GroupMainTableSeeder::class);
        $this->call(GroupSub1TableSeeder::class);
        $this->call(GroupSub2TableSeeder::class);
        $this->call(ColorTableSeeder::class);
        $this->call(SizeTableSeeder::class);
    }
}
