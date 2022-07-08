<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empresas;

class EmpresasFactory extends Factory
{
    // CLASE QUE VAMOS A SEMBRAR
    protected $model = Empresas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->company(),
            'localidade' => $this->faker->city(),
            'poboacion' => $this->faker->state(),
            'actividade' => $this->faker->catchPhrase(),
            'telefono' => $this->faker->regexify('[0-9]{9}'),
            'fax' => $this->faker->regexify('[0-9]{9}'),
            'data_incorporacion' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'persoa_contacto' => $this->faker->name(),
            'orientador' => $this->faker->randomElement(['Alberte', 'Eva', 'Maika']),
            'ofertas_contratacion' => $this->faker->regexify('[0-9]{2}'),
            'ofertas_formacion' => $this->faker->regexify('[0-9]{2}'),
            'notas' => $this->faker->text(),
        ];
    }
}
