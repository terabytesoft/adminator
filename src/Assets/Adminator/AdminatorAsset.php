<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @assets: [AdminatorAsset]
 *       @since: 1.0
 *         @yii: 3.0
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
		\TerabyteSoft\Themes\Adminator\Assets\Bower\BootBoxAsset::class,
		\TerabyteSoft\Assets\Fontawesome\Dev\Css\NpmAllAsset::class,
	];

	public $publishOptions = [
		'only' => [
			'Css/Adminator.css',
			'Css/Login.css',
			'Css/Register.css',
			'Css/Site.css',
			'Js/Lodash.Custom.min.js',
			'Js/Adminator.js',
		],
	];
}
