# laravel5_samples

## setup
```
curl -sS https://getcomposer.org/installer | php
php composer.phar create-project laravel/laravel sampleapp1 --prefer-dist
```

## MySQL
```
mysql> CREATE DATABASE `l5_sample1_db`;
mysql> GRANT ALL PRIVILEGES ON *.* TO 'l5_user'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;
```

## .env
```
DB_HOST=localhost
DB_DATABASE=l5_sample1_db
DB_USERNAME=l5_user
DB_PASSWORD=password
```

### config/app.phpを編集
```
<?php

return [
	'timezone' => 'Asia/Tokyo',
	'locale' => 'ja',
	'fallback_locale' => 'ja',
];

```

## debugar
```
php ../composer.phar require barryvdh/laravel-debugbar
```

### config/app.phpに追加
```
<?php
	'providers' => [
		// 追加
		'Barryvdh\Debugbar\ServiceProvider',
	],

	'aliases' => [
		// 追加
		'Debugbar' => 'Barryvdh\Debugbar\Facade',

	],
```

### ビルドインサーバとして確認
```
php artisan serve --host 192.168.33.10
```
※hostを指定しないとlocalhostになる
