<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Links;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Links::create(['url' => 'https://buy.stripe.com/3cseWD7awdlW57W5kv']);
        Links::create(['url' => 'https://buy.stripe.com/14k5m3gL60za6c0cMW']);
        Links::create(['url' => 'https://buy.stripe.com/8wM8yf2Ug95G2ZO6ox']);
        Links::create(['url' => 'https://buy.stripe.com/5kA3dV7awgy8dEsaEM']);
        Links::create(['url' => 'https://buy.stripe.com/28o7ubdyUfu4gQE8wD']);
        Links::create(['url' => 'https://buy.stripe.com/eVa6q78eA2Hi1VK28e']);
        Links::create(['url' => 'https://buy.stripe.com/6oE5m30M8gy8gQE3ch']);
        Links::create(['url' => 'https://buy.stripe.com/aEU15NamI81CfMAaEI']);
        Links::create(['url' => 'https://buy.stripe.com/00g9CjeCY2Hi0RG6or']);
        Links::create(['url' => 'https://buy.stripe.com/5kA3dV0M895GgQEbIK']);
        Links::create(['url' => 'https://buy.stripe.com/3cs15NfH2gy843SdQR']);
        Links::create(['url' => 'https://buy.stripe.com/00gg0HamI0za8k86oo']);
    }
}
