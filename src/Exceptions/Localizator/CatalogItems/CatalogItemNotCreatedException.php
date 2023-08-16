<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\CatalogItems;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class CatalogItemNotCreatedException extends FormatterException
{
    protected string $messageCode = 'LCI-00002';
}
