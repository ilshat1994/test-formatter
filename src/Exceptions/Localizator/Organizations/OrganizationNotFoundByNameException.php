<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Organizations;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class OrganizationNotFoundByNameException extends FormatterException
{
    protected string $localKey = 'LOR-00002';
}