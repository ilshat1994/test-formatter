<?php

namespace Idsb2b\ResponseFormatter\Exceptions\Localizator\Organizations;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class OrganizationNotUpdatedException extends FormatterException
{
    protected string $messageCode = 'LOR-00004';
}