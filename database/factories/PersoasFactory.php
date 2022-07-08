<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Persoas;

class PersoasFactory extends Factory
{
    // CLASE QUE VAMOS A SEMBRAR
    protected $model = Persoas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $sexo = ['H' , 'M' , 'OUTRO'];
        return [
            'nome' => $this->faker->firstName(),
            'primeiro_apelido'=> $this->faker->lastName(),
            'segundo_apelido' => $this->faker->lastName(),
            'nif'=> $this->faker->regexify('[0-9]{8}[A-Z]{1}'),
            'data_nacemento'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'sexo' => $this->faker->randomElement(['HOME' , 'MULLER' , 'OUTRO']),
            'codigo_postal' => $this->faker->regexify('[0-9]{5}'),
            'telefono' => $this->faker->regexify('[0-9]{9}'),
            'email' => $this->faker->safeEmail(),
            // 'email_verified_at' => now(),
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
