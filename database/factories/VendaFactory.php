<?php

namespace Database\Factories;

use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'VEN_QUANTIDADE' => $this->faker->realText(10),
            'VEN_PRO_CODIGO' => Produto::inRandomOrder()->first()->id,
            'VEN_CLIENTE' => $this->faker->realText(10),
            'VEN_DATA' => '25/02/2021'
            'VEN_STATUS' => $this->faker->realText(15),
            //
        ];
    }
}
