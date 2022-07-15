<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{

    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomProducto'=>$this->faker->word(),
            'en_existencia'=>$this->faker->numerify,
            'descripcionProduc'=>$this->faker->paragraph(1, 250),
            'fecha_entrada'=>$this->faker->date
        ];
    }
}
