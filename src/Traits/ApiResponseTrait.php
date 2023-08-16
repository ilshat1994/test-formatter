<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;
use Idsb2b\ResponseFormatter\Enums\LocalKeyEnum;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Throwable;

trait ApiResponseTrait
{
    /**
     * @param array $data
     * @param array $params
     * @return JsonResponse
     */
    final public function createdResponse(array $data = [], array $params = []): JsonResponse
    {
        return $this->successResponse(
            $data,
            LocalKeyEnum::ENTITY_CREATED,
            $params,
            ResponseAlias::HTTP_CREATED
        );
    }

    /**
     * Возвращает ответ success.
     *
     * @param array $data
     * @param string $localKey
     * @param array $parameters
     * @param int $code
     *
     * @return JsonResponse
     */
    final public function successResponse(
        array $data,
        string $localKey = '',
        array $parameters = [],
        int $code = ResponseAlias::HTTP_OK
    ): JsonResponse {
        return response()->json(
            [
                'type' => 'SUCCESS',
                'localeKey' => $localKey,
                'parameters' => $parameters,
                'data' => $data
            ],
            $code
        );
    }

    /**
     * Возвращает базовый ответ с полем data
     * ```json
     * {
     *    "type": "DATA",
     *    "data": {
     *      ...
     *    }
     * }
     *```
     *
     * @param array $data
     * @param int $code
     *
     * @return JsonResponse
     */
    final public function dataResponse(array $data, int $code = ResponseAlias::HTTP_OK): JsonResponse
    {
        return response()->json([ 'type' => 'DATA', 'data' => $data], $code);
    }
}