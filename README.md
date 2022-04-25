# :package_description

Используется вместе с пакетом `nikservik/admin-dashboard`.

## Установка

```bash
composer require vendor_slug/package_slug
```

## Использование

Для подключения к Админ-панели нужно добавить название и описание в файл переводов:
```php
// файл resources/lang/ru/admin.php

return [
    // название и описание, которые будут отображаться в admin-dashboard
    'dashboard-name' => 'Название',
    'dashboard-description' => 'Небольшое описание',
    // внутренняя часть svg для иконки в Админ-панели
    // иконки нужно брать на heroicons.com
    // для примера добавлена иконка 'user'
    'dashboard-icon-path' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />',
    ...
```

## Тестирование

```bash
phpunit
```

## Changelog


