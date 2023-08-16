<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Globals;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class RedisSaveException extends FormatterException
{
    protected string $messageCode = 'LGL-00001';
}
