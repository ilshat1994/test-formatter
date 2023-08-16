<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Translations;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class TranslationNotCreatedException extends FormatterException
{
    protected string $messageCode = 'LTR-00006';
}
