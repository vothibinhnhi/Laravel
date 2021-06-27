<?php

namespace Database\Seeders;

use App\Models\KindOfNews;
use Illuminate\Database\Seeder;

class KindOfNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KindOfNews::factory()->count(10)->create();
    }
}
