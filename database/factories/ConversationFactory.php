<?php

namespace Database\Factories;

use App\Models\Annonce;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conversation>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $initiateur_id = User::inRandomOrder()->first();
        $destinataire_id = User::where('id', '!=', $initiateur_id->id)->inRandomOrder()->first();
        $annonce_id = Annonce::inRandomOrder()->first();

        return [
            'initiateur_id'   => $initiateur_id->id ?? null,
            'destinataire_id' => $destinataire_id->id ?? null,
            'annonce_id'      => $annonce_id->id ?? null,
        ];
    }
}
