<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_code' => $this->faker->word,
        'last_name' => $this->faker->word,
        'first_name' => $this->faker->word,
        'middle_name' => $this->faker->word,
        'gender' => $this->faker->word,
        'birth_date' => $this->faker->word,
        'marital_status' => $this->faker->randomDigitNotNull,
        'state_of_origin' => $this->faker->randomDigitNotNull,
        'email' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'created_by' => $this->faker->randomDigitNotNull,
        'updated_by' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
