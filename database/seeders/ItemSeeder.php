<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 500 sample items
        for ($i = 1; $i <= 500; $i++) {
            Item::create(['name' => 'Item ' . $i]);
        }
    }
}
