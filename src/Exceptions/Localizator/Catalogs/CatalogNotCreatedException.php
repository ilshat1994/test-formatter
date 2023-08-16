<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Catalogs;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class CatalogNotCreatedException extends FormatterException
{
    protected string $messageCode = 'LCT-00002';
}
