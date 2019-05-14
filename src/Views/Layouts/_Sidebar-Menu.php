<?php

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
