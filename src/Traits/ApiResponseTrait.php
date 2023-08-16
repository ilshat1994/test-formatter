<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;
use Illuminate\Http\JsonResponse;
use Throwable;

trait ApiResponseTrait
{
    /**
     * Возвращает ошибку в нужном виде. Необходимо для прода.
     * @param ErrorInterface $error
     * @return JsonResponse
     */
    final public function errorResponse(ErrorInterface $error): JsonResponse
    {
        return response()->json([
            'type' => $error->type(),
            'localKey' => $error->localKey(),
            'fields' => $error->fields(),
        ]);
    }

    /**
     * Возвращает ошибку с трейсом. Нужно для локальной разработки.
     * @param Throwable $error
     * @return JsonResponse
     */
    final public function localErrorResponse(Throwable $error): JsonResponse
    {
        return response()->json([
            'code' => $error->getCode(),
            'message' => $error->getMessage(),
            'trace' => $error->getTrace(),
        ]);
    }
}