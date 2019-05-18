<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: _Menu.php
 **/

/* @var $this \yii\web\View */

use Yiisoft\Yii\Bootstrap4\Html;
use Yiisoft\Yii\Bootstrap4\Nav;
use Yiisoft\Yii\Bootstrap4\NavBar;

?>

<!- MENU - START !->

<?php

NavBar::begin([
	'brandUrl' => $this->app->homeUrl,
	'containerOptions' => ['aria-label' => 'Toggle navigation'],
	'options' => [
		'class' => 'navbar navbar-expand-lg ' . $this->app->params['adminator.menu.nav.custom.css'],
	],
	'togglerOptions' => [
		'class' => [
			'navbar-light',
		],
	],
]);

echo Nav::widget([
	'options' => ['class' => 'navbar-nav float-right ml-auto c-white'],
	'items' => $this->app->params['adminator.menu.nav.items'],
	'encodeLabels' => false,
]);

NavBar::end();

?>

<!- MENU - END !->
