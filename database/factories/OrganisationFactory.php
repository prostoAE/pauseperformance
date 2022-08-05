<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class OrganisationFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        $groupId = Group::where('user_id', '=', 1)->get();
        $groupId = $groupId->random();

        return [
            'name' => $this->faker->unique()->company,
            'user_id' => $this->faker->numberBetween(1, 3),
            'group_id' => $groupId->id,
            'currency' => $this->faker->randomElement(['eur', 'usd', 'dkk']),
        ];
    }
}
