<?php

namespace Database\Factories;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->name,
            'dni'=>$this->faker->numerify('####-')
                .$this->faker->numberbetween(1950,2004)
                .$this->faker->numerify('-#####'),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique->safeEmail
        ];

    }
}
