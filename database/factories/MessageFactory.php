<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lu'              => $this->faker->boolean(60),  // 60% de chance que le message soit marqué comme lu
            'texte'           => $this->faker->sentence(20), // message aléatoire de 20 mots
            'auteur_id'       => User::inRandomOrder()->first()->id ?? null,
            'conversation_id' => Conversation::inRandomOrder()->first()->id,
        ];
    }
}
