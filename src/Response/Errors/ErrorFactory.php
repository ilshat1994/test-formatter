<?php

namespace Idsb2b\ResponseFormatter\Response\Errors;


use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;
use Idsb2b\ResponseFormatter\Enums\ErrorLocalKeyEnum;
use Idsb2b\ResponseFormatter\Exceptions\FormatterException;
use Idsb2b\ResponseFormatter\ValidationConvert;

class ErrorFactory
{
    /**
     * Генерация ошибки валидации.
     * @param array $validationErrors
     * @param array $failed
     * @return ErrorInterface
     */
    final public function errorValidation(array $validationErrors, array $failed): ErrorInterface
    {
        return $this->error(
            ErrorLocalKeyEnum::VALIDATION_ERROR,
            [],
            $this->generateValidationFields($validationErrors, $failed),
        );
    }

    /**
     * Ошибка типа FormatterException.
     * @param string $localKey
     * @param array $parameters
     * @return ErrorInterface
     */
    final public function errorFormatter(string $localKey, array $parameters): ErrorInterface
    {
        return $this->error($localKey, $parameters);
    }

    /**
     * Ошибка типа ModelNotFoundException.
     * @return ErrorInterface
     */
    final public function errorNotFound(): ErrorInterface
    {
        return $this->error(ErrorLocalKeyEnum::MODEL_NOT_FOUND);
    }

    /**
     * Преобразовывает ошибку валидации в нужный для нас вид.
     * @param array $validationErrors
     * @param array $failed
     * @return array
     */
    private function generateValidationFields(array $validationErrors, array $failed): array
    {
        $response = [];

        foreach ($validationErrors as $key => $error) {
            $response[] = [
                'field' => $key,
                'errors' => $this->generateValidationErrorsResponse($error, $failed[$key])
            ];
        }

        return $response;
    }

    /**
     * @param array $errors
     * @param array $failed
     * @return array
     */
    private function generateValidationErrorsResponse(array $errors, array $failed): array
    {
        $response = [];

        foreach ($errors as $validationErrorKey) {
            $response[] = ValidationConvert::getValidationData($validationErrorKey, $failed);
        }

        return $response;
    }

    /**
     * @param string $localKey
     * @param array $fields
     * @param string|null $type
     * @param array $parameters
     * @return ErrorInterface
     */
    final public function error(
        string $localKey,
        array $parameters = [],
        array $fields = [],
        ?string $type = 'ERROR',
    ): ErrorInterface {
        return (new Error())
            ->setFields($fields)
            ->setLocalKey($localKey)
            ->setType($type)
            ->setParameters($parameters);
    }
}