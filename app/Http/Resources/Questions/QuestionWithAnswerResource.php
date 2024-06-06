<?php

namespace App\Http\Resources\Questions;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionWithAnswerResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'title' => $this->title,
            'answers_count' => $this->answers_count,
            'options' => $this->options->map(fn($option) => [
                'id' => $option->id,
                'title' => $option->title,
                'answers_count' => $option->answers_count,
                'percentage' => !$this->answers_count ? 0 : round($option->answers_count / $this->answers_count * 100),
                'users' => $option->answers->map(fn($answer) => [
                    'id' => $answer->user->id,
                    'name' => $answer->user->name,
                    'date' => $answer->created_at->format('Y-m-d H:i:s'),
                ]),
            ]),
        ];
    }
}
