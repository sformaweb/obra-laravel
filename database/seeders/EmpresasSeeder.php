<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresas;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CUANDO SE EJECUTE EL COMANDO SEED SE CREARÁN 50 REGISTROS
        Empresas::factory()->count(50)->create();
    }
}
