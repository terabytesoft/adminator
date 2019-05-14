<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *        @view: layout[_menuser]
 *       @since: 1.0
 *         @yii: 3.0
 **/

/* @var $this \yii\web\View */

use TerabyteSoft\Widgets\Sidebar;
use Yiisoft\Yii\Bootstrap4\Html;
use Yiisoft\Yii\Bootstrap4\Nav;
use yii\helpers\Url;

$imagesUrl = TerabyteSoft\Themes\Adminator\Assets\Images\ImagesAsset::register($this);
$avatarUrl = $this->app->getAlias($imagesUrl->baseUrl) . '/Avatar/Profile/30/icon-avatar.png';
$userName = $this->app->user->identity->username;

$nav[] = [
	'label' => Html::begintag('div', ['class' => 'peer mR-10']) .
		Html::img(
			$avatarUrl,
			$options = [
				'class' => 'w-2r bdrs-50p',
			]
		) .
		Html::endTag('div') .
		Html::begintag('div', ['class' => 'peer']) .
			Html::tag(
				'span',
				$userName,
				$options = [
					'class' => 'fsz-sm c-grey-900',
				]
			) .
		Html::endTag('div'),
	'options' => ['class' => ''],
	'url' => '\\#',
	'linkOptions' => ['class' => 'no-after peers fxw-nw ai-c lh-1'],
	'items' => $this->app->params['adminator.menu.menuser.nav.items'],
];

?>

<!- MENUSER !->

<?= Html::beginTag('div', [
	'class' => 'header navbar ' . $this->app->params['adminator.menu.menuser.nav.css']
]) ?>
	<?= Html::beginTag('div', ['class' => 'header-container']) ?>
		<?php
			echo Sidebar::widget([
				'encodeLabels' => false,
				'labelTemplate' => '{label}',
				'linkTemplate' => '<a href="{url}" {linkOptions}>{icon}</a>',
				'options' => ['class' => 'nav-left'],
				'items' => $this->app->params['adminator.menu.menuser.toolbar.items'],
			]);

			echo Nav::widget([
				'encodeLabels' => false,
				'options' => ['class' => 'nav-right'],
				'items' => $nav,
			]);
		?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>

<!- END - MENUSER !->
