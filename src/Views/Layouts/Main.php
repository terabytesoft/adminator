<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Layout: Main.php
 **/

/* @var $this \yii\web\View */
/* @var $content string */

use TerabyteSoft\Themes\Adminator\Assets\Adminator\AdminatorAsset;
use TerabyteSoft\Assets\ThemifyIcons\ThemifyIconsAsset;

use TerabyteSoft\Widgets\Alert;
use Yiisoft\Yii\Bootstrap4\Html;
use Yiisoft\Yii\Bootstrap4\Breadcrumbs;

AdminatorAsset::register($this);
ThemifyIconsAsset::register($this);

$imagesUrl = TerabyteSoft\Themes\Adminator\Assets\Images\ImagesAsset::register($this);
$this->params['baseUrl'] = $this->app->getAlias($imagesUrl->baseUrl);

?>

<!- BEGIN-PAGE -!>

<?php $this->beginPage() ?>
	<!DOCTYPE html>
	<!- HTML -!>
	<?= Html::beginTag('html', ['lang' => $this->app->language]) ?>
		<!- HEAD -!>
		<?= Html::beginTag('head') ?>
		<?= Html::tag('meta', '', ['charset' => $this->app->encoding]) ?>
			<?= Html::tag('meta', '', ['http-equiv' => 'X-UA-Compatible', 'content' => 'IE=edge']) ?>
			<?= Html::tag('meta', '', ['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']) ?>
			<?= Html::csrfMetaTags() ?>
			<?= Html::tag('title', Html::encode($this->title)) ?>
			<?php $this->head() ?>
		<?= Html::endTag('head') ?>
		<!- END - HEAD -!>
		<?php $this->beginBody() ?>
			<!- BODY !->
			<?= Html::begintag('body', ['class' => 'app']) ?>
				<!- LOADER SCRIPT !->
				<?= Html::beginTag('div', ['id' => 'loader']) ?>
					<?= Html::beginTag('div', ['class' => 'spinner']) ?>
					<?= Html::endTag('div') ?>
				<?= Html::endTag('div') ?>
				<?php if (!$this->app->user->isGuest) : ?>
					<?= Html::beginTag('div') ?>
						<?= $this->render('_Sidebar') ?>
						<!- PAGE-CONTAINER -!>
						<?= Html::beginTag('div', ['class' => 'page-container']) ?>
							<?= $this->render('_Menuser') ?>
							<!- MAIN -!>
							<?= Html::beginTag('main', ['class' => 'main-content bgc-grey-100']) ?>
								<!- WIDGET-BREADCRUMBS !->
								<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ?
									$this->params['breadcrumbs'] : [], ]) ?>
								<!- CONTENT !->
								<?= $content ?>
								<!- ALERT-WIDGET !->
								<?= Alert::widget()?>
							<?= Html::endTag('main') ?>
							<!- END - MAIN -!>
							<?= $this->render('_Footer') ?>
						<?= Html::endTag('div') ?>
						<!- END - PAGE-CONTAINER -!>
					<?= Html::endTag('div') ?>
				<?php else : ?>
					<!- WRAPPER !->
					<?= Html::beginTag('wrapper', ['class' => 'd-f flex-column']) ?>
						<?php if (!in_array(
							$this->app->controller->action->id,
							$this->app->params['adminator.menu.menuser.nav.items.hidden']
						)) : ?>
							<?= $this->render('_Menu') ?>
						<?php endif; ?>
						<!- SECTION-CONTENT !->
						<?= Html::beginTag(
							'div',
							[
								'class' => in_array(
									$this->app->controller->action->id,
									$this->app->params['adminator.menu.menuser.nav.items.hidden']
								)
								? 'container-fluid flex-fill'
								: (in_array(
									$this->app->controller->action->id,
									[
										'error',
									]
								)
								? 'container d-f flex-fill'
								: 'container flex-fill')
							]
						) ?>
							<!- WIDGET-BREADCRUMBS !->
							<?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ?
								$this->params['breadcrumbs'] : [], ]) ?>
							<!- CONTENT !->
							<?= $content ?>
							<!- ALERT-WIDGET !->
							<?= Alert::widget()?>
						<?= Html::endTag('div') ?>
						<!- END - SECTION-CONTENT !->
						<?= $this->render('_Footer') ?>
					<?= Html::endTag('wrapper') ?>
					<!- END - WRAPPER !->
				<?php endif; ?>
			<?= Html::endTag('body') ?>
			<!- END - BODY -!>
		<?php $this->endBody() ?>
	<?= Html::endTag('html') ?>
	<!- END - HTML -!>
<?php $this->endPage() ?>

<!- END - BEGIN-PAGE -!>
