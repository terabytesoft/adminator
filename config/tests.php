<?php

use yii\di\Reference;

return [
    'app' => [
        'basePath' => dirname(__DIR__) . '/tests/src',
        'controllerNamespace' => '\TerabyteSoft\Themes\Adminator\Tests\Controllers',
        'layout' => '@TerabyteSoft/Themes/Adminator/Views/Layouts/Main.php',
    ],
	'authClientCollection' => [
		'__class' => Yiisoft\Yii\AuthClient\Collection::class,
		'setClients()' => [
			'github' => [
				'__class'      => Yiisoft\Yii\AuthClient\Clients\Github::class,
				'clientId'     => 'CLIENT_ID',
				'clientSecret' => 'CLIENT_SECRET',
			],
		],
	],
    'aliases' => array_merge($aliases, [
        '__class'   => yii\base\Aliases::class,
        '@root'     => YII_ROOT,
        '@vendor'   => '@root/vendor',
        '@public'   => '@root/tests/public',
        '@runtime'  => '@public/runtime',
        '@web'      => '/',
    ]),
    'assetManager' => [
        '__class'   => yii\web\AssetManager::class,
        'basePath'  => '@public/assets',
        'baseUrl'   => '@web/assets',
	],
	// Configuration ControllerMap [AdminLTE - Basic] //
	'controllerMap' => [
    	'security' => [
        	'class' => '\TerabyteSoft\Module\User\Controllers\SecurityController',
    	],
	],
    'request' => [
        'enableCookieValidation' => false,
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '',
	],
    'theme' => [
        'pathMap' => [
            '@TerabyteSoft/Themes/Adminator/Tests/views/layouts' => '@TerabyteSoft/Themes/Adminator/Views/Layouts',
			'@TerabyteSoft/Themes/Adminator/Tests/views/site' => '@TerabyteSoft/Themes/Adminator/Views/Site',
        ],
	],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName'  => false,
    ],
    'user' => [
        'identityClass' =>  \Yiisoft\Yii\Base\Web\Models\User::class, // User must implement the IdentityInterface
	],
];
