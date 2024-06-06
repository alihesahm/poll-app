<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\StoreQuestionRequest;
use App\Http\Resources\Questions\QuestionWithAnswerResource;
use App\Http\Resources\Questions\QuestionWithUserResource;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class QuestionController extends Controller
{

    public function index(): JsonResponse
    {
        $questions = Question::query()
            ->with(['options','user' => fn($q) => $q->distinct()])
            ->get();

        QuestionWithUserResource::$user_count = User::query()->where('type', UserTypeEnum::USER)->count();

        return sendSuccessResponse(data: QuestionWithUserResource::collection($questions));
    }

    public function show(Question $question): JsonResponse
    {
        $question->loadCount('answers')
            ->load(['options' => fn ($q) => $q->withCount('answers')->with('answers.user')]);
        return sendSuccessResponse(data: new QuestionWithAnswerResource($question));
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

    public function destroy(Question $question): JsonResponse
    {
        $question->delete();
        return sendSuccessResponse(__('messages.delete_data'));
    }
}
