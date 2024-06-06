<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnswerController extends Controller
{
    public function store(Request $request,Question $question)
    {
        $data = $request->validate([
            'option_id' => ['required', 'integer', Rule::exists('options', 'id')
                            ->where('question_id', $question->id)],
        ]);
        $user_answer = currentUser()->answers()->where('question_id', $question->id)->count();
        if ($user_answer < $question->allowed_answers) {
            return sendFailedResponse(__('messages.answer_limit'));
        }
        currentUser()->answers()->create($data + ['question_id' => $question->id]);

        return sendSuccessResponse(__('messages.create_data'));
    }
}
