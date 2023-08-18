# Response formatter

# Установка

Используйте [composer](https://getcomposer.org/) для установки
```json
{
    "require": {
    }
}
```

1. Добавьте в Handler.php следущее.
```php
use Idsb2b\ResponseFormatter\Traits\ExceptionRenderTrait;
use Throwable;




use ExceptionRenderTrait;

public function render($request, Throwable $e)
{
    return $this->renderError($request, $e, function ($request, $e) {
        return parent::render($request, $e);
    });
}
```
2. [validation.php](resources%2Flang%2Fen%2Fvalidation.php) замените на [validation.php](resources%2Flang%2Fen%2Fvalidation.php)
3. Необходимо отключить дебаг режим. В случае если режим включет. То errorResponse будет в себе содержать всю информацию об ошибке. 
```dotenv
APP_DEBUG=false
```