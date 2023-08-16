<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Products;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class ProductNotFoundByNameException extends FormatterException
{
    protected string $messageCode = 'LPR-00002';
}