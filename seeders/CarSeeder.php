<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car =new Car();
        $car->nombre = "Hilux";
        $car->descripcion = "Carro de la compañia Toyota";
        $car->año = 2024;
        $car->save();
    }
}
