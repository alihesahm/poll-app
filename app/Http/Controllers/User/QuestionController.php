<?php

namespace App\Http\Controllers\User;

use App\Enums\UserTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\StoreQuestionRequest;
use App\Http\Resources\Questions\QuestionWithAnswerResource;
use App\Http\Resources\Questions\QuestionWithOptionsResource;
use App\Http\Resources\Questions\QuestionWithUserResource;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(): JsonResponse
    {
        $questions = Question::query()
            ->with(['options','user' => fn($q) => $q->distinct()])
            ->get();

        return sendSuccessResponse(data: QuestionWithOptionsResource::collection($questions));
    }


    public function show(Question $question): JsonResponse
    {
        return sendSuccessResponse(data: new QuestionWithOptionsResource($question));
    }

}
