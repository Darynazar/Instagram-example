<?php

namespace Database\Seeders;
use App\Models\counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        counter::create([
            'views' => '1'
        ]);
    }
}
