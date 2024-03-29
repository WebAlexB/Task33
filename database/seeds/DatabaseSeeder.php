<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(CotegoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrderStatusesTableSeeder::class);
    }
}
