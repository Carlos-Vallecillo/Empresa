<?php

namespace Database\Factories;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numeroPedido'=>$this->faker->numerify,
            'estado'=>$this->faker->randomElement(['Entregado', 'Por Entregar']),
            'descripcion'=>$this->faker->paragraph(1, 250),
            'direccion'=>$this->faker->Address
        ];

    }
}
