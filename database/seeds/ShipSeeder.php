<?php

use App\Ship;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Ship::truncate();
        Ship::create([
            'name'       => 'Balsa',
            'cargo'      => 30,
            'crew'       => 20,
            'cannons'    => 10,
            'hull'       => 36,
            'speed'      => 80,
            'price'      => 10000,
            'build_time' => 60 * 5,
        ]);
        Ship::create([
            'name'       => 'Light Galley',
            'cargo'      => 90,
            'crew'       => 30,
            'hull'       => 48,
            'cannons'    => 10,
            'speed'      => 85,
            'price'      => 60000,
            'build_time' => 60 * 60,
        ]);
        Ship::create([
            'name'       => 'Caravela Redonda',
            'cargo'      => 80,
            'crew'       => 40,
            'hull'       => 36,
            'cannons'    => 20,
            'speed'      => 90,
            'price'      => 75000,
            'build_time' => 60 * 60 * 2,
        ]);
        Ship::create([
            'name'       => 'Flemish Galleon',
            'cargo'      => 290,
            'crew'       => 200,
            'hull'       => 96,
            'cannons'    => 30,
            'speed'      => 80,
            'price'      => 500000,
            'build_time' => 60 * 60 * 24,

        ]);
        Ship::create([
            'name'       => 'Carrack',
            'cargo'      => 470,
            'hull'       => 60,
            'crew'       => 160,
            'cannons'    => 50,
            'speed'      => 80,
            'price'      => 450000,
            'build_time' => 60 * 60 * 24,
        ]);
        Schema::enableForeignKeyConstraints();

    }
}
