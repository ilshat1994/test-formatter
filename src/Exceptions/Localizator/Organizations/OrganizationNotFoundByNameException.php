<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Organizations;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class OrganizationNotFoundByNameException extends FormatterException
{
    protected string $messageCode = 'LOR-00002';
}