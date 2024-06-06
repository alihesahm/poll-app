<?php

namespace App\Http\Resources\User;

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
            'title' => $this->title,
            'vote_user_count' => $this->user->count(),
            'not_vote_user_count' => $this->user->count() - $this::$user_count ,

        ];
    }
}
