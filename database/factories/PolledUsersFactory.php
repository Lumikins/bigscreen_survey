<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PolledUser>
 */
class PolledUsersFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    // create random emails using faker
    $fake_email = fake()->unique()->safeEmail();

    return [
      // create random polled users
      'email' => $fake_email,
      'hash' => md5($fake_email . time()),
      'created_at' => date("Y-m-d H:i:s"),
    ];
  }
}
