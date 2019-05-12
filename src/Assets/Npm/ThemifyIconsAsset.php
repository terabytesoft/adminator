<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @assets: [ThemefyIconsAsset]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace TerabyteSoft\Themes\Adminator\Assets\Npm;

use yii\web\AssetBundle;

class ThemifyIconsAsset extends AssetBundle
{
	public $sourcePath = '@npm/ti-icons/';

	public $css = [
		'css/themify-icons.css',
	];

	public $publishOptions = [
		'only' => [
			'themify-icons.css',
			'fonts/*',
		],
	];
}
