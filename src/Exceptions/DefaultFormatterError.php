<?php

namespace Idsb2b\ResponseFormatter\Exceptions;

class DefaultFormatterError extends FormatterException
{
    protected string $localKey = '';
    protected array $parameters = [];

    /**
     * @param string $localKey
     * @param array $parameters
     */
    public function __construct(string $localKey, array $parameters)
    {
        $this->localKey = $localKey;
        $this->parameters = $parameters;

        parent::__construct();
    }
}