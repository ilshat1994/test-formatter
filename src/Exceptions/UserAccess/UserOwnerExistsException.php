<?php

namespace Idsb2b\ResponseFormatter\Exceptions\UserAccess;

use Idsb2b\ResponseFormatter\Exceptions\FormatterException;

class UserOwnerExistsException extends FormatterException
{
    protected string $messageCode = 'USR-00001';
}
