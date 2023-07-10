<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Response\Errors\ErrorFactory;
use Illuminate\Validation\ValidationException;
use Throwable;
use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;

trait ExceptionRenderTrait
{
    use ApiResponseTrait;

    /**
     * Функция генерации ошибки.
     * @param Request $request
     * @param Throwable $exception
     * @param Closure $defaultRender
     * @return Response
     */
    public function renderError(
        Request   $request,
        Throwable $exception,
        Closure   $defaultRender
    )
    {
        $isLocalWithoutDebug = env('APP_DEBUG', false)
            && in_array(env('APP_ENV'), ['local']);

        if ($isLocalWithoutDebug) {
            return $defaultRender($request, $exception);
        }

        $error = null;
        $errors = new ErrorFactory();

        if ($exception instanceof ValidationException) {
            $error = $errors->errorValidation(
                $exception->validator->getMessageBag()->toArray(),
                $exception->validator->failed()
            );
        }

        return $this->errorResponse($error);
    }
}