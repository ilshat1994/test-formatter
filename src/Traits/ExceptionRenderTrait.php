<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;
use Idsb2b\ResponseFormatter\Exceptions\FormatterException;
use Idsb2b\ResponseFormatter\Response\Errors\ErrorFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Throwable;
use Illuminate\Http\Request;
use Closure;
use Symfony\Component\HttpFoundation\Response;

trait ExceptionRenderTrait
{
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

        $errors = new ErrorFactory();

        if ($exception instanceof ValidationException) {
            $error = $errors->errorValidation(
                $exception->validator->getMessageBag()->toArray(),
                $exception->validator->failed()
            );
        } elseif ($exception instanceof FormatterException) {
            $error = $errors->errorFormatter($exception->getLocalKey(), $exception->getParameters());
        } elseif ($exception instanceof ModelNotFoundException) {
            $error = $errors->errorNotFound();
        } else {
            return $defaultRender($request, $exception);
        }


        return $this->errorResponse($error);
    }

    /**
     * Возвращает ошибку в нужном виде. Необходимо для прода.
     * @param ErrorInterface $error
     * @return JsonResponse
     */
    private function errorResponse(ErrorInterface $error): JsonResponse
    {
        return response()->json([
            'type' => $error->type(),
            'localKey' => $error->localKey(),
            'fields' => $error->fields(),
            'parameters' => $error->parameters()
        ]);
    }

    /**
     * Возвращает ошибку с трейсом. Нужно для дебага.
     * @param Throwable $error
     * @return JsonResponse
     */
    private function debugErrorResponse(Throwable $error): JsonResponse
    {
        return response()->json([
            'code' => $error->getCode(),
            'message' => $error->getMessage(),
            'trace' => $error->getTrace(),
        ]);
    }
}