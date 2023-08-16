<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\InterfaceItems;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class InterfaceItemNotChangedException extends FormatterException
{
    protected string $messageCode = 'LII-00003';
}
