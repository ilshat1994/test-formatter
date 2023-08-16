<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Languages;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class LanguageNotFoundException extends FormatterException
{
    protected string $localKey = 'LLN-00001';
}
