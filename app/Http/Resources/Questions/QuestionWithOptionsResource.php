<?php

namespace App\Http\Resources\Questions;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionWithOptionsResource extends JsonResource
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
            'date' => $this->created_at->format('Y-m-d H:i:s'),
            'options' => $this->options->map(fn($option) => [
                'id' => $option->id,
                'title' => $option->title,
            ]),
        ];
    }
}
