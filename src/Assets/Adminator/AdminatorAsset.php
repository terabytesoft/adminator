<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * Class AdminatorAsset.
 *
 * Register assset bundle adminator theme
 **/

namespace TerabyteSoft\Themes\Adminator\Assets\Adminator;

use yii\web\AssetBundle;

class AdminatorAsset extends AssetBundle
{
	public $sourcePath = __DIR__ ;

	public $css = [
		'Css/Adminator.css',
		'Css/Login.css',
		'Css/Register.css',
		'Css/Request.css',
		'Css/Resend.css',
		'Css/Site.css',
	];

	public $js = [
		'Js/Lodash.Custom.min.js',
		'Js/Adminator.js',
	];

	public $depends = [
		\Yiisoft\Yii\Bootstrap4\BootstrapAsset::class,
		\Yiisoft\Yii\Bootstrap4\BootstrapPluginAsset::class,
		\Yiisoft\Yii\JQuery\JqueryAsset::class,
		\Yiisoft\Yii\JQuery\YiiAsset::class,
		\TerabyteSoft\Assets\Bootbox\BootboxAsset::class,
		\TerabyteSoft\Assets\Fontawesome\Dev\Css\NpmAllAsset::class,
	];

	public $publishOptions = [
		'only' => [
			'Css/Adminator.css',
			'Css/Login.css',
			'Css/Register.css',
			'Css/Request.css',
			'Css/Resend.css',
			'Css/Site.css',
			'Js/Lodash.Custom.min.js',
			'Js/Adminator.js',
		],
	];
}
