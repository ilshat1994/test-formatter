<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;
use Idsb2b\ResponseFormatter\Response\Errors\ErrorFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
    final public function renderError(
        Request   $request,
        Throwable $exception,
        Closure   $defaultRender
    ): Response
    {
        if (env('APP_DEBUG', false)) {
            return $this->debugErrorResponse($exception);
        }

        $error = null;
        $errors = new ErrorFactory();

        if ($exception instanceof ValidationException) {
            $error = $errors->errorValidation(
                $exception->validator->getMessageBag()->toArray(),
                $exception->validator->failed()
            );
        } elseif ($exception instanceof FormatterException) {
            $error = $errors->errorFormatter($exception->getMessageCode());
        } elseif ($exception instanceof ModelNotFoundException) {
            $error = $errors->errorNotFound($exception->getMessage());
        } else {
            return $defaultRender($request, $exception);
        }


        return $this->errorResponse($error);
    }
}