<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: _Sidebar.php
 **/
/* @var $this \yii\web\View */

use Yiisoft\Yii\Bootstrap4\Html;

?>

<!- SIDEBAR - START -!>

<?= Html::begintag('div', ['class' => 'sidebar']) ?>
	<?= Html::begintag('div', ['class' => 'sidebar-inner']) ?>
		<!- SIDEBAR-HEADER -!>
		<?= $this->render('_Sidebar-Header') ?>
		<!- SIDEBAR-MENU -!>
		<?= $this->render('_Sidebar-Menu') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>

<!- SIDEBAR - END -!>
