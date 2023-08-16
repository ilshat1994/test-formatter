<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Applications;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ApplicationNotFoundByNameException extends FormatterException
{
    protected string $localKey = 'LAP-00009';
}