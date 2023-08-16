<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Applications;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ApplicationLanguageUpdateException extends FormatterException
{
    protected string $messageCode = 'LAP-00008';
}
