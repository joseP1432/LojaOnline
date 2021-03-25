<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'PRO_NOME' => $this->realText(20),
            'PRO_DESCRICAO' => $this->realText(60),
            'PRO_PRECOCOMPRA' => 8,
            'PRO_PRECOVENDA' => 16,
            'PRO_QUANTIDADE' => 5,
            'PRO_FOR_CODIGO' => 1,

        ];
    }
}
