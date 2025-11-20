<?php

namespace Database\Seeders;

use App\Models\AdditionalServices;
use App\Models\User;
use App\Models\Testing;
use App\Models\Building;
use App\Models\Customers;
use App\Models\MaExample;
use App\Models\DoaExample;
use App\Models\DomicileCharge;
use App\Models\Extention;
use App\Models\MbaExample;
use App\Models\SoaExample;
use App\Models\VoaExample;
use App\Models\InquiryExample;
use App\Models\InvoiceChargerSlip;
use App\Models\InvoiceDoa;
use App\Models\InvoiceMba;
use App\Models\InvoiceSoa;
use App\Models\InvoiceVoa;
use App\Models\MeetingRoom;
use App\Models\Phones;
use App\Models\Rooms;
use App\Models\SourceInquiry;
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
        // inquiry
        InquiryExample::factory(100)->create();

        // agreement
        SoaExample::factory(100)->create();
        VoaExample::factory(100)->create();
        MbaExample::factory(100)->create();
        MaExample::factory(100)->create();
        DoaExample::factory(100)->create();

        // master data
        Rooms::factory(100)->create();
        AdditionalServices::factory(100)->create();
        SourceInquiry::factory(100)->create();
        Phones::factory(100)->create();
        MeetingRoom::factory(100)->create();
        Extention::factory(100)->create();
        DomicileCharge::factory(100)->create();

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

        // invoice
        InvoiceSoa::factory(3500)->create();
        InvoiceVoa::factory(2613)->create();
        InvoiceMba::factory(224)->create();
        InvoiceDoa::factory(513)->create();
        InvoiceChargerSlip::factory(523)->create();

        // customers
        Customers::factory(425)->create();
    }
}
