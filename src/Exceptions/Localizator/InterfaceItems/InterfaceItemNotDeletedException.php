<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\InterfaceItems;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class InterfaceItemNotDeletedException extends FormatterException
{
    protected string $messageCode = 'LII-00004';
}
