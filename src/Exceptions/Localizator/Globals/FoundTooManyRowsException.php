<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Globals;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class FoundTooManyRowsException extends FormatterException
{
    protected string $localKey = 'LGL-00006';
}