<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Applications;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ApplicationSetupNotFoundException extends FormatterException
{
    protected string $messageCode = 'LAP-00006';
}
