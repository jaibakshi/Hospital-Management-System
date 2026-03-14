<?php

namespace Database\Factories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'department_id' => fake()->numberBetween(1,8),
            'specialization' => fake()->randomElement(['Orthopedics','Cardiology','Neurology','Pediatrics', 'General Physician']),
            'experience' => fake()->numberBetween(1,10),
            'consultation_fee' => fake()->randomElement([500,600,700,800,900,1000]),
            'opd_start'=> '09:00:00',
            'opd_end'=> '17:00:00',
            'slot_duration' => fake()->randomElement([15]),
            'weekly_off' => fake()->randomElement([1,2,3,4,5,6,7]),

        ];
    }
}
