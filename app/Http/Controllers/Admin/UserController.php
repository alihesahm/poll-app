<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUserRequest $request): JsonResponse
    {
        $data = $request->validated();
        User::query()->create($data);
        return sendSuccessResponse(__('messages.create_data'));
    }
}
