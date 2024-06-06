<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\StoreQuestionRequest;
use App\Http\Resources\User\QuestionWithAnswerResource;
use App\Models\Question;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index(): JsonResponse
    {
        $questions = Question::query()
            ->with(['options' => fn ($q)=>$q->withCount('answers')])
            ->withCount('answers')
            ->get();

        return sendSuccessResponse(data: QuestionWithAnswerResource::collection($questions));
    }


    public function store(StoreQuestionRequest $request): JsonResponse
    {
        $data = $request->validated();
        $question = Question::query()->create(['title' => $data['title'], 'allowed_answers' => $data['allowed_answers']]);
        foreach ($data['options'] as $option) {
            $question->options()->create(['title' => $option['title']]);
        }
        return sendSuccessResponse(__('messages.create_data'));
    }
}
