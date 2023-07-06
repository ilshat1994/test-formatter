<?php

namespace Idsb2b\ResponseFormatter\Traits;

trait ApiResponseTrait
{
    public function errorResponse(Error $error)
    {
        return response()->json([
            'error' => $this->errorToArray($error),
        ], $error->status());
    }
}