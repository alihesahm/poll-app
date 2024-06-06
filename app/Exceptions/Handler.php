<?php

declare(strict_types=1);

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

final class Handler extends ExceptionHandler
{
    use ExceptionsHandler;

    public function render($request, Throwable $e): \Illuminate\Http\Response|JsonResponse|Response
    {
        return match (app()->environment()) {
            'staging' => $this->convertExceptionToJsonResponse($request, $e),
            default => parent::render($request, $e)
        };
    }
}
