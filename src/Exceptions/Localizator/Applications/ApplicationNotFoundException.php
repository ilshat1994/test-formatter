<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Applications;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ApplicationNotFoundException extends FormatterException
{
    protected string $localKey = 'LAP-00001';
}
