<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: _Menuser.php
 **/

/* @var $this \yii\web\View */

use TerabyteSoft\Themes\Adminator\Widgets\Sidebar;
use Yiisoft\Yii\Bootstrap4\Html;
use Yiisoft\Yii\Bootstrap4\Nav;
use yii\helpers\Url;

$nav[] = [
	'label' => Html::begintag('div', ['class' => 'peer mR-10']) .
		Html::img(
			$this->params['baseUrl'] . '/Avatar/Profile/30/icon-avatar.png',
			$options = [
				'class' => 'w-2r bdrs-50p',
			]
		) .
		Html::endTag('div') .
		Html::begintag('div', ['class' => 'peer']) .
			Html::tag(
				'span',
				$this->app->user->identity->username,
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
