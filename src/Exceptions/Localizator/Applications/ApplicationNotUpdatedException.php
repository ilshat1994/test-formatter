<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Applications;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ApplicationNotUpdatedException extends FormatterException
{
    protected string $messageCode = 'LAP-00011';
}