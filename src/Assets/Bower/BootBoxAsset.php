<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @assets: [BootBoxAsset]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace TerabyteSoft\Themes\Adminator\Assets\Bower;

use yii\web\AssetBundle;

class BootBoxAsset extends AssetBundle
{
	public $sourcePath = '@npm/bootbox/';

	public $js = [
		'src/bootbox.js',
	];

	public $publishOptions = [
		'only' => [
			'bootbox.js',
		],
	];
}
