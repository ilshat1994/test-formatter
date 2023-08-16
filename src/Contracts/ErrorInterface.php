<?php

namespace Idsb2b\ResponseFormatter\Contracts;

interface ErrorInterface
{
    public function type(): string;

    public function localKey(): string;

    /**
     * Массив параметров в которых возникла ошибка
     * ```json
     * "fields": [
     *      {
     *          "field": "is_owner",
     *          "errors" : [
     *              {
     *                  "type": "array",
     *                  "localKey": null,
     *                  "parameters": [],
     *              },
     *              {
     *                  "type": "min.array",
     *                  "localKey": null,
     *                  "parameters": [
     *                      {
     *                          "type": "min",
     *                          "value": 2,
     *                          "localKey": null
     *                      },
     *                      {
     *                          "type": "param2",
     *                          "value": null,
     *                          "localKey": "UI..Backend Validation Messages.gte.array"
     *                      }
     *                  ],
     *              }
     *          ],
     *      },
     *      ...
     * ]
     * ```
     *
     * @return array|null
     */
    public function fields(): ?array;

    /**
     * @return array|null
     */
    public function parameters(): ?array;
    public function setParameters(array $parameters = []): ErrorInterface;

    public function setType(string $type = 'ERROR'): ErrorInterface;

    public function setLocalKey(string $localKey): ErrorInterface;

    public function setFields(array $fields): ErrorInterface;
}