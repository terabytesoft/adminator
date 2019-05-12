<?php

use yii\helpers\Yii;
use Yiisoft\Yii\Bootstrap4\Html;

return [
	// aplication:
	'app.id'      => 'my-project-basic',
	'app.name'    => 'My Project Basic',
	'adminEmail'  => 'admin@example.com',
	'favicon.ico' => '@yii/app/../public/favicon.ico',
	// theme-adminator
	'adminator.copyright' => 'CJTTERABYTE INC - ' . strftime('%Y') . '.',
	'adminator.logo-yii' => 'https://farm2.staticflickr.com/1757/27875123737_f2ab0311e3_o.png',
	'adminator.footer.css' => '',
	'adminator.footer.account.facebook' => '',
	'adminator.footer.account.linkedin' => '',
	'adminator.footer.account.github' => '',
	'adminator.footer.account.twitter' => '',
	'adminator.menu.nav' => [
		[
			'label' => Html::tag('i', '', ['class' => '']) . ' ' .
			Yii::t('ThemeAdminator', 'Home'), 'url' => ['/site/index'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'ion-android-person-add fa-lg']) . ' ' .
			Yii::t('ThemeAdminator', 'Signup'), 'url' => ['/site/signup'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'fa fa-sign-in fa-lg']) . ' ' .
			Yii::t('ThemeAdminator', 'Login'), 'url' => ['/site/login'],
		],
	],
	'adminator.menu.nav.css' => '',
	'adminator.options.debug' => false,
	'adminator.options.floatlabels' => false,
	'adminator.url.login' => '//user/security/login',
	// debug:
	'debug.enabled' => false,
	'debug.allowedIPs' => ['127.0.0.1', '::1', '*'],
];
