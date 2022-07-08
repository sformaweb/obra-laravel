<?php

namespace Database\Seeders;

use App\Models\Empresas;
use App\Models\Persoas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('admin1234'),
            'remember_token' =>  Str::random(10),
        ]);

        Persoas::factory()->count(200)->create();
        Empresas::factory()->count(50)->create();
    }
}
