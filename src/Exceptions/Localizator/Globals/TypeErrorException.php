<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Globals;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class TypeErrorException extends FormatterException
{
    protected string $messageCode = 'LGL-00004';
}
