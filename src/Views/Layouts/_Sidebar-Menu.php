<?php

/* @var $this \yii\web\View */

use TerabyteSoft\Widgets\Sidebar;

?>

<!- SIDEBAR-MENU -!>

<?php

echo Sidebar::widget([
	'options' => ['class' => 'sidebar-menu scrollable pos-r'],
	'labelTemplate' => '<a href="#">{icon}{label}{right-icon}</a>',
	'linkTemplate' => '<a href="{url}" {linkOptions}>{icon}{label}{right-icon}</a>',
	'submenuTemplate' => '<ul class=\"dropdown-menu\">{items}</ul>',
	'activateParents' => true,
	'encodeLabels' => false,
	'items' => $this->app->params['adminator.sidebar.menu.items'],
	'activeCssClass' => 'active open',
]);

?>

<!- END - SIDEBAR-MENU -!>
