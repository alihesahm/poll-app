<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Answers\StoreAnswerRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnswerController extends Controller
{
    public function store(StoreAnswerRequest $request,Question $question)
    {
        $data = $request->validated();

        $user_answer = currentUser()->answers()->where('question_id', $question->id)->count();

        if ($user_answer > $question->allowed_answers) {
            return sendFailedResponse(__('messages.answer_limit'));
        }

        foreach ($data['options'] as $option) {
            currentUser()->answers()->create(['option_id' => $option, 'question_id' => $question->id]);
        }


        return sendSuccessResponse(__('messages.create_data'));
    }
}
