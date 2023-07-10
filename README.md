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
/**
 * @param $request
 * @param Throwable $e
 * @return Response|JsonResponse
 * @throws Throwable
 */
public function render($request, Throwable $e): Response|JsonResponse
{
    return $this->renderError($request, $e, function ($request, $e) {
        return parent::render($request, $e);
    });
}
```
2. [validation.php](resources%2Flang%2Fen%2Fvalidation.php) замените на [validation.php](resources%2Flang%2Fen%2Fvalidation.php)
3. Работает только в то случае если в .env не будет local.
```dotenv
APP_ENV=prod
```