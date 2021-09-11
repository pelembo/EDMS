<?php

namespace Database\Factories;

use App\Models\;
use Illuminate\Database\Eloquent\Factories\Factory;

class Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document_code' => $this->faker->word,
        'title' => $this->faker->word,
        'description' => $this->faker->word,
        'file_upload' => $this->faker->word,
        'created_by' => $this->faker->randomDigitNotNull,
        'updated_by' => $this->faker->randomDigitNotNull,
        'document_type_id' => $this->faker->randomDigitNotNull,
        'workgroup_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
