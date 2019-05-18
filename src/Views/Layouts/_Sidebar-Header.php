<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: _Sidebar-Header.php
 **/

/* @var $this \yii\web\View */

use Yiisoft\Yii\Bootstrap4\Html;

?>

<!- SIDEBAR-HEADER -!>

<?= Html::begintag('div', ['class' => 'sidebar-logo']) ?>
	<?= Html::begintag('div', ['class' => 'peers ai-c fxw-nw']) ?>
		<?= Html::begintag('div', ['class' => 'peer peer-greed']) ?>
			<?= Html::begintag('a', ['class' => 'sidebar-link td-n', 'href' => $this->app->homeUrl]) ?>
				<?= Html::begintag('div', ['class' => 'peers ai-c fxw-nw']) ?>
					<?= Html::begintag('div', ['class' => 'peer']) ?>
						<?= Html::begintag('div', ['class' => 'logo']) ?>
							<?= Html::img($this->params['baseUrl'] . '/Logos/Logo.png', $options = ['alt' => '']) ?>
						<?= Html::endTag('div') ?>
					<?= Html::endTag('div') ?>
					<?= Html::begintag('div', ['class' => 'peer peer-greed']) ?>
						<?= Html::begintag('h5', ['class' => 'lh-1 mB-0 logo-text']) ?>
							<?= Html::encode($this->app->t('Adminator', 'Adminator')) ?>
						<?= Html::endTag('h5') ?>
					<?= Html::endTag('div') ?>
				<?= Html::endTag('div') ?>
			<?= Html::endTag('a') ?>
		<?= Html::endTag('div') ?>
		<?= Html::begintag('div', ['class' => 'peer']) ?>
			<?= Html::begintag('div', ['class' => 'mobile-toggle sidebar-toggle']) ?>
				<?= Html::begintag('a', ['class' => 'td-n', 'href' => '']) ?>
					<?= Html::begintag('i', ['class' => 'ti-arrow-circle-left']) ?>
					<?= Html::endTag('i') ?>
				<?= Html::endTag('a') ?>
			<?= Html::endTag('div') ?>
		<?= Html::endTag('div') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>

<!- END - SIDEBAR-HEADER -!>
