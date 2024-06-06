<?php

namespace App\Http\Controllers\User;

use App\Exceptions\LogicalException;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Http\Resources\Admin\Auth\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;

class AuthController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
    {
        $data = $request->validated();
        $admin = User::query()->where('job_number', $data['job_number'])
            ->where('password', $data['password'])
            ->first();
        if (!$admin ) {
            throw new LogicalException(__('auth.failed'), 401);
        }
        $admin->token = $admin->createToken('Token')->plainTextToken;
        return sendSuccessResponse(__('auth.success_login'), LoginResource::make($admin));
    }
}
