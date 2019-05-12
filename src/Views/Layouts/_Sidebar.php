<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *        @view: layout[_sidebar]
 *       @since: 1.0
 *         @yii: 3.0
 **/

/* @var $this \yii\web\View */

use yii\helpers\Html;

?>

<!- SIDEBAR - START -!>
<?= Html::begintag('div', ['class' => 'sidebar']) ?>
	<?= Html::begintag('div', ['class' => 'sidebar-inner']) ?>
		<!- SIDEBAR-HEADER -!>
		<?= $this->render('_sidebar-header') ?>
		<!- SIDEBAR-MENU -!>
		<?= $this->render('_sidebar-menu') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- SIDEBAR - END -!>
