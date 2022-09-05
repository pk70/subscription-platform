<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 6; $i++) {
        \App\Models\Website::create([
            'name' => "MyWebsite_".$i,
        ]);
     }
    }
}
