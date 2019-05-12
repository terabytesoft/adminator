<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *        @view: layout[_menu]
 *       @since: 1.0
 *         @yii: 3.0
 **/

/* @var $this \yii\web\View */

use Yiisoft\Yii\Bootstrap4\Nav;
use Yiisoft\Yii\Bootstrap4\NavBar;

?>

<!- MENU - START !->
<?php $user = $this->app->user->identity;

NavBar::begin([
	'brandUrl' => $this->app->homeUrl,
	'containerOptions' => ['aria-label' => 'Toggle navigation'],
	'options' => [
		'class' => 'navbar navbar-expand-lg ' . $this->app->params['adminator.menu.nav.css'],
	],
	'togglerOptions' => [
		'class' => [
			'navbar-light',
		],
	],
]);

echo Nav::widget([
	'options' => ['class' => 'navbar-nav float-right ml-auto c-white'],
	'items' => $this->app->params['adminator.menu.nav'],
	'encodeLabels' => false,
]);

NavBar::end();

?>
<!- MENU - END !->
