<?php

namespace Idsb2b\ResponseFormatter\Traits;

use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;
use Illuminate\Http\JsonResponse;

trait ApiResponseTrait
{
    /**
     * @param ErrorInterface $error
     * @return JsonResponse
     */
    public function errorResponse(ErrorInterface $error): JsonResponse
    {
        return response()->json([
            'type' => $error->type(),
            'localKey' => $error->localKey(),
            'fields' => $error->fields(),
        ]);
    }
}