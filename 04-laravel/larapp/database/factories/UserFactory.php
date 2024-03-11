<?php


namespace Database\Factories;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected $model = User::class;


     public function definition()
     {
         $gender = $this->faker->randomElement(['male', 'female']); // Obtener un género aleatorio
         $name = ($gender == 'male') ? $this->faker->firstNameMale : $this->faker->firstNameFemale; // Asignar nombre basado en el género
 
         
 
         return [
             'document' => $this->faker->randomNumber(9, true),
             'fullname' => $name . " " . $this->faker->lastName(),
             'gender'   => $gender,
             'birthdate'=>fake()->dateTimeBetween('1980-01-01','2002-12-31'),
             'photo'    => fake()->image('public/images', 640, 480, null, false),
             'phone'    => $this->faker->phoneNumber(),
             'email'    => $this->faker->unique()->safeEmail(),
             'email_verified_at' => now(),
             'password' => Hash::make('12345'),
             'remember_token' => Str::random(10),
             
         ];
     }









    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
