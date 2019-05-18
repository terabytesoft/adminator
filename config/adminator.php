<?php

use yii\helpers\Yii;
use Yiisoft\Yii\Bootstrap4\Html;

return [
// adminator - options
	'adminator.autor.copyright' => 'TerabyteSoft - ' . strftime('%Y') . '.',
	'adminator.logo.yii' => 'https://farm2.staticflickr.com/1757/27875123737_f2ab0311e3_o.png',
	'adminator.social.account.facebook' => '',
	'adminator.social.account.linkedin' => '',
	'adminator.social.account.github' => '',
	'adminator.social.account.twitter' => '',
	// adminator - footer
	'adminator.footer.custom.css' => '',
	// adminator - menu - options
	'adminator.menu.nav.custom.css' => '',
	'adminator.menu.nav.items' => [
		[
			'label' => Html::tag('i', '', ['class' => '']) . ' ' .
			Yii::t('Adminator', 'Home'), 'url' => ['/site/index'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'ion-android-person-add fa-lg']) . ' ' .
			Yii::t('Adminator', 'Signup'), 'url' => ['/user/registration/register'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'fa fa-sign-in fa-lg']) . ' ' .
			Yii::t('Adminator', 'Login'), 'url' => ['/user/security/login'],
		],
	],
	// adminator - menu - menuser - options
	'adminator.menu.menuser.nav.css' => '',
	'adminator.menu.menuser.nav.items' => [
		[
			'label' => Html::tag('i', '', ['class' => 'ti-settings mR-10']) .
				Html::tag('span', 'Settings'),
			'url' => '/user/settings/account',
			'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'ti-user mR-10']) .
				Html::tag('span', 'Profile'),
			'url' => '/user/settings/profile',
			'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm'],
		],
		[
			'label' => Html::tag('i', '', ['class' => 'ti-power-off mR-10']) .
				Html::tag('span', 'Logout'),
			'url' => ['/user/security/logout'],
			'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm', 'data-method' => 'post']
		],
	],
	'adminator.menu.menuser.toolbar.items' => [
		// icon toggle
		[
			'icon' => Html::tag('i', '', ['class' => 'ti-menu']),
			'url' => 'javascript:void(0);',
			'linkOptions' => ['class' => 'sidebar-toggle', 'id' => 'sidebar-toggle'],
		],
		// icon search
		[
			'icon' => Html::tag('i', '', ['class' => 'search-icon ti-search pdd-right-10']) .
				Html::tag('i', '', ['class' => 'search-icon-close ti-close pdd-right-10']),
			'url' => 'javascript:void(0);',
			'options' => ['class' => 'search-box'],
			'linkOptions' => ['class' => 'search-toggle no-pdd-right'],
		],
		// text search
		[
			'label' => Html::tag('input', '', ['type' => 'text', 'placeholder' => 'Search...']),
			'options' => ['class' => 'search-input'],
		],
	],
	'adminator.menu.menuser.nav.items.hidden' => [
		'login',
		'register',
		'request',
		'resend',
	],
	//adminator - sidebar - options
	'adminator.sidebar.menu.items' => [
		[
			'label' => Html::tag(
				'span',
				Html::encode(
					Yii::t('Tests', 'Dashboard')
				),
				['class' => 'title']
			),
			'icon' => Html::tag(
				'span',
				Html::tag(
					'i',
					'',
					['class' => 'c-blue-500 ti-home']
				),
				['class' => 'icon-holder']
			),
			'url' => '/',
			'linkOptions' => ['class' => 'sidebar-link'],
			'options' => ['class' => 'nav-item'],
		],
		[
			'label' => Html::tag(
				'span',
				Html::encode(
					Yii::t('Tests', 'Manage Users')
				),
				['class' => 'title']
			),
			'icon' => Html::tag(
				'span',
				Html::tag(
					'i',
					'',
					['class' => 'c-blue-500 ti-user']
				),
				['class' => 'icon-holder']
			),
			'url' => ['/user/admin/index'],
			'linkOptions' => ['class' => 'dropdown-toggle'],
			'options' => ['class' => 'nav-item dropdown'],
		],
	],
];
