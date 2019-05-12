<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *        @view: layout[_sidebar-menu]
 *       @since: 1.0
 *         @yii: 3.0
 **/

/* @var $this \yii\web\View */

use cjtterabytesoft\widgets\Sidebar;

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
	'items' => \Yii::$app->params['dashboard_sidebar'],
	'activeCssClass' => 'active open',
]);
?>
<!- END - SIDEBAR-MENU -!>
