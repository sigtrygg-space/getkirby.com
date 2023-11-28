<?php

use Kirby\Http\Route;

return [
	'api'        => false,
	'buy'        => require __DIR__ . '/buy.php',
	'categories' => require __DIR__ . '/categories.php',
	'debug'      => true,
	'features'   => require __DIR__ . '/features.php',
	'github'     => ['url' => 'https://github.com/getkirby'],
	'hooks' => [
		'route:after' => function (Route $route, string $path, string $method, mixed $result, bool $final) {
			if ($final === true) {
				header('X-Frame-Options: sameorigin');
				header('X-XSS-Protection: 1; mode=block');
				header('X-Content-Type-Options: nosniff');
			}

			return $result;
		}
	],
	'hub'        => ['url' => 'https://hub.getkirby.com'],
	'keys'       => file_exists(__DIR__ . '/keys.php') ? require __DIR__ . '/keys.php' : require __DIR__ . '/keys.sample.php',
	'meta'       => require __DIR__ . '/meta.php',
	'newstroll'  => ['list' => 110866],
	'panel'      => false,
	'plugins'    => require __DIR__ . '/plugins.php',
	'routes'     => require __DIR__ . '/routes.php',
	'search'     => require __DIR__ . '/search.php',
	'thumbs'     => [
		// 'driver' => 'im'
	],
	'versions'   => require __DIR__ . '/versions.php',
];
