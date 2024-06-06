<?php

namespace App\Http\Controllers\User;

use App\Enums\UserTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\StoreQuestionRequest;
use App\Http\Resources\User\QuestionWithAnswerResource;
use App\Http\Resources\User\QuestionWithUserResource;
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
//        dd($questions);
        QuestionWithUserResource::$user_count = User::query()->where('type', UserTypeEnum::USER)->count();

        return sendSuccessResponse(data: QuestionWithUserResource::collection($questions));
    }

}
