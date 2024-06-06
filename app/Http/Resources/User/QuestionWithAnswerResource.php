<?php

namespace App\Http\Resources\User;

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
            'title' => $this->title,
            'answers_count' => $this->answers_count,
            'options' => $this->options->map(fn($option) => [
                'id' => $option->id,
                'title' => $option->title,
                'answers_count' => $option->answers_count,
                'percentage' => !$this->answers_count ? 0 : round($option->answers_count / $this->answers_count * 100)
            ]),
        ];
    }
}
