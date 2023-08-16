<?php

namespace Idsb2b\ResponseFormatter\Response\Errors;

use Idsb2b\ResponseFormatter\Contracts\ErrorInterface;

class Error implements ErrorInterface
{
    private string $type = 'ERROR';
    private string $localKey;
    private array $fields = [];
    private array $parameters = [];

    /**
     * @return string
     */
    final public function type(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    final public function localKey(): string
    {
        return $this->localKey;
    }

    /**
     * @return array|null
     */
    final public function fields(): ?array
    {
        return empty($this->fields) ? null : $this->fields;
    }

    /**
     * @param string $type
     * @return ErrorInterface
     */
    final public function setType(string $type = 'ERROR'): ErrorInterface
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $localKey
     * @return ErrorInterface
     */
    final public function setLocalKey(string $localKey): ErrorInterface
    {
        $this->localKey = $localKey;

        return $this;
    }

    /**
     * @param array $fields
     * @return ErrorInterface
     */
    final public function setFields(array $fields): ErrorInterface
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return array|null
     */
    final public function parameters(): ?array
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return ErrorInterface
     */
    final public function setParameters(array $parameters = []): ErrorInterface
    {
        $this->parameters = $parameters;

        return $this;
    }
}