<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Languages;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class LanguageNotChangedException extends FormatterException
{
    protected string $messageCode = 'LLN-00002';
}