<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Testing;
use App\Models\Building;
use App\Models\MaExample;
use App\Models\DoaExample;
use App\Models\MbaExample;
use App\Models\SoaExample;
use App\Models\VoaExample;
use App\Models\InquiryExample;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => Hash::make('lala321'),
            'role' => 'admin' // nanti ada admin, atasan, dan divisi masing masing
        ]);

        Testing::factory(50)->create();
        InquiryExample::factory(500)->create();
        SoaExample::factory(200)->create();
        VoaExample::factory(200)->create();
        MbaExample::factory(200)->create();
        MaExample::factory(200)->create();
        DoaExample::factory(200)->create();

        Building::create([
            'name' => 'Kota Kasablanka Tower',
            'phone' => '021 29851600',
            'fax' => '021 29851601',
            'address' => 'EightyEight@Kasablanka Office Tower, 18th floor, Tower A - H, Kota Kasablanka, Jl.Casablanca kav.88 Jakarta 12870, Indonesia'
        ]);

        Building::create([
            'name' => 'Gandaria 8 Office Tower',
            'phone' => '021 29851600',
            'fax' => '021 29851601',
            'address' => 'Gandaria 8 Office Tower, 8th Floor, Jl.Sultan Iskandar Muda, Arteri Pondok Indah Jakarta 12240, Indonesia'
        ]);

    }
}
