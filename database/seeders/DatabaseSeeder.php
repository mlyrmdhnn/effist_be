<?php

namespace Database\Seeders;

use App\Models\DoaExample;
use App\Models\User;
use App\Models\Testing;
use App\Models\SoaExample;
use App\Models\VoaExample;
use App\Models\InquiryExample;
use App\Models\MaExample;
use App\Models\MbaExample;
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
        InquiryExample::factory(500)->create();
        SoaExample::factory(200)->create();
        VoaExample::factory(200)->create();
        MbaExample::factory(200)->create();
        MaExample::factory(200)->create();
        DoaExample::factory(200)->create();
    }
}
