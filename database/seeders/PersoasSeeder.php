<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persoas;

class PersoasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CUANDO SE EJECUTE EL COMANDO SEED SE CREARÁN 20 REGISTROS
        Persoas::factory()->count(200)->create();
    }
}
