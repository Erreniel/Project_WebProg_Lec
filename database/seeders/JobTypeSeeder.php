<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobType::insert([
            'name' => 'WFO'
        ]);
        JobType::insert([
            'name' => 'WFH'
        ]);
        JobType::insert([
            'name' => 'WFO Shifting'
        ]);
    }
}
