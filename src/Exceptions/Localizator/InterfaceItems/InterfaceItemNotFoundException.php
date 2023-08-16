<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\InterfaceItems;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class InterfaceItemNotFoundException extends FormatterException
{
    protected string $localKey = 'LII-00001';
}
