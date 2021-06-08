<?php

namespace Database\Seeders;

use App\Models\HewanQurban;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class HewanQurbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HewanQurban::create([
            'name' => 'Domba',
            'param' => 'domba',
            'harga' => '1600000',
        ]);
        HewanQurban::create([
            'name' => '1/7 Sapi',
            'param' => 'sapi-patungan',
            'harga' => '2100000',
        ]);
        HewanQurban::create([
            'name' => 'Sapi',
            'param' => 'sapi',
            'harga' => '14700000',
        ]);
    }
}
