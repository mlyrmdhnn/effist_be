<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Testing;
use App\Models\SoaExample;
use App\Models\VoaExample;
use App\Models\InquiryExample;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Testing::factory(50)->create();
        InquiryExample::factory(10)->create();
        SoaExample::factory(10)->create();
        VoaExample::factory(10)->create();

    }
}
