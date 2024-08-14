<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        // الاستثناءات التي لا تريد الإبلاغ عنها
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            switch ($exception->getStatusCode()) {
                case 403:
                    return response()->view('errors::403', [], 403);
                case 404:
                    return response()->view('errors::404', [], 404);
                case 405:
                    return response()->view('errors::405', [], 405);
                case 419:
                    return response()->view('errors::419', [], 419);
                case 429:
                    return response()->view('errors::429', [], 429);
                case 500:
                    return response()->view('errors::500', [], 500);
                case 503:
                    return response()->view('errors::503', [], 503);
                default:
                    return $this->renderHttpException($exception);
            }
        }

        return parent::render($request, $exception);
    }



}
