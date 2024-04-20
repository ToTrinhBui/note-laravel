<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $note_content = fake()->realText(2000);
        $note = "<p>{$note_content}</p>";
        return [
            'note' => $note,
            'user_id' => 1,
            'title' => fake()->realTextBetween(5, 15),
        ];
    }
}
