<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: _Sidebar-Menu.php
 **/

/* @var $this \yii\web\View */

use TerabyteSoft\Themes\Adminator\Widgets\Sidebar;

?>

<!- SIDEBAR-MENU -!>

<?php

echo Sidebar::widget([
	'options' => ['class' => 'sidebar-menu scrollable pos-r'],
	'activateParents' => false,
	'encodeLabels' => false,
	'items' => $this->app->params['adminator.sidebar.menu.items'],
]);

?>

<!- END - SIDEBAR-MENU -!>
