<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'allowed_answers',
    ];


    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }

    public function user(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, Answer::class, 'question_id', 'id', 'id', 'user_id');
    }
}
