<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Globals;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class RowNotFoundException extends FormatterException
{
    protected string $localKey = 'LGL-00007';
}