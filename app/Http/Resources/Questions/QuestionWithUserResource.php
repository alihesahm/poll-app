<?php

namespace App\Http\Resources\Questions;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionWithUserResource extends JsonResource
{
    public static int $user_count = 0;
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
            'vote_user_count' => $this->user->count(),
            'not_vote_user_count' => self::$user_count - $this->user->count(),
        ];
    }
}
