<?php

namespace Idsb2b\ResponseFormatter\Exceptions;

use Exception;

abstract class FormatterException extends Exception
{
    protected string $localKey = 'default';
    protected array $parameters = [];

    /**
     * @return string
     */
    final public function getLocalKey(): string
    {
        return $this->localKey;
    }

    /**
     * @return array
     */
    final public function getParameters(): array
    {
        return $this->parameters;
    }
}