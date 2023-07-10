<?php

namespace Idsb2b\ResponseFormatter\Exceptions;

use Exception;

abstract class FormatterException extends Exception
{
    protected string $messageCode = 'default';

    /**
     * @return string
     */
    final public function getMessageCode(): string
    {
        return $this->messageCode;
    }
}