<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\CatalogItems;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class CatalogItemNotUpdatedException extends FormatterException
{
    protected string $messageCode = 'LCI-00004';
}
