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

use cjtterabytesoft\widgets\Sidebar;
use yii\bootstrap4\Nav;
use yii\helpers\Html;

?>

<!- MENUSER !->
<?= Html::beginTag('div', ['class' => 'header navbar ' . \Yii::$app->params['dashboard_user_nav_css']]) ?>
	<?= Html::beginTag('div', ['class' => 'header-container']) ?>
		<?php
			echo Sidebar::widget([
				'encodeLabels' => false,
				'labelTemplate' => '{label}',
				'linkTemplate' => '<a href="{url}" {linkOptions}>{icon}</a>',
				'options' => ['class' => 'nav-left'],
				'items' => \Yii::$app->params['dashboard_toolbar_nav'],
			]);

			echo Nav::widget([
				'encodeLabels' => false,
				'options' => ['class' => 'nav-right'],
				'items' => \Yii::$app->params['dashboard_user_nav'],
			]);
		?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- END - MENUSER !->
