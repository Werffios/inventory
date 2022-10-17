<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trademark;

class TrademarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trademark::create([
            'name' => 'HP',
        ]);
        Trademark::create([
            'name' => 'Dell',
        ]);
        Trademark::create([
            'name' => 'Lenovo',
        ]);
        Trademark::create([
            'name' => 'Acer',
        ]);
        Trademark::create([
            'name' => 'Apple',
        ]);
        Trademark::create([
            'name' => 'Samsung',
        ]);
        Trademark::create([
            'name' => 'LG',
        ]);
        Trademark::create([
            'name' => 'Sony',
        ]);
        Trademark::create([
            'name' => 'Toshiba',
        ]);
        Trademark::create([
            'name' => 'Asus',
        ]);
        Trademark::create([
            'name' => 'MSI',
        ]);
        Trademark::create([
            'name' => 'Xiaomi',
        ]);
        Trademark::create([
            'name' => 'Huawei',
        ]);
        Trademark::create([
            'name' => 'Motorola',
        ]);
        Trademark::create([
            'name' => 'Cisco',
        ]);
        Trademark::create([
            'name' => 'Linksys',
        ]);
        Trademark::create([
            'name' => 'Netgear',
        ]);
        Trademark::create([
            'name' => 'TP-Link',
        ]);

    }
}
