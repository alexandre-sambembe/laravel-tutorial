<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->sentence(3),
            'quantidade' => $this->faker->numberBetween(2, 2000),
            'ficha_tecnica' => $this->faker->text,
            'ean' => $this->faker->ean13(),
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
            'marca_id' => Marca::inRandomOrder()->first()->id,
        ];
    }
}

