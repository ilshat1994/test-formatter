<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Globals;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class FoundTooManyRowsException extends FormatterException
{
    protected string $messageCode = 'LGL-00006';
}