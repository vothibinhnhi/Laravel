<?php

namespace Database\Factories;

use App\Models\KindOfNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class KindOfNewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KindOfNews::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'category_id'=>1
        ];
    }
}
