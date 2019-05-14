<?php

use Yiisoft\Yii\Bootstrap4\Html;

?>

<!- FOOTER !->

<?= Html::beginTag('footer', [
	'class' => 'footer ' . $this->app->params['adminator.footer.custom.css']
]) ?>
	<?= Html::beginTag('div', ['class' => 'container fsz-sm']) ?>
		<?= Html::beginTag('div', ['class' => 'row']) ?>
			<?= Html::beginTag('div', ['class' => 'col-sm ta-l']) ?>
				<?= Html::tag('span', '', [
					'class' => 'ico far fa-copyright fa-w-16 fa-2x align-middle'
				]) ?>
				<?= Html::tag(
					'span',
					'&nbsp' . $this->app->params['adminator.autor.copyright'],
					[
						'class' => 'align-middle'
					]
				) ?>
			<?= Html::endTag('div') ?>
			<?= Html::beginTag('div', ['class' => 'col-sm d-none d-lg-inline']) ?>
				<?= Html::tag('span', 'POWERED BY: ', ['class' => 'align-middle']) ?>
				<?= html::img(
					$this->app->params['adminator.logo.yii'],
					[
						'class' => 'align-middle',
						'style' => 'width:150px;'
					]
				) ?>
			<?= Html::endTag('div') ?>
			<?= Html::beginTag('div', ['class' => 'col-sm ta-r d-none d-sm-inline']) ?>
				<?= Html::beginTag('span', ['class' => 'align-middle', 'style' => 'padding-right: 5px']) ?>
					<?= $this->app->t('Adminator', 'SOCIAL NETWORKS:') ?>
				<?= Html::endTag('span') ?>
				<?= Html::a(
					'',
					$this->app->params['adminator.social.account.github'],
					[
						'class' => 'ico fab fa-github fa-w-16 fa-2x align-middle', 'target' => '_blank',
					]
				) ?>
				<?= Html::a(
					'',
					$this->app->params['adminator.social.account.facebook'],
					[
						'class' => 'ico fab fab fa-facebook-f fa-w-16 fa-2x align-middle', 'target' => '_blank',
					]
				) ?>
				<?= Html::a(
					'',
					$this->app->params['adminator.social.account.twitter'],
					[
						'class' => 'ico fab fa-twitter fa-w-16 fa-2x align-middle', 'target' => '_blank',
					]
				) ?>
				<?= Html::a(
					'',
					$this->app->params['adminator.social.account.linkedin'],
					[
						'class' => 'ico fab fab fa-linkedin-in fa-w-16 fa-2x align-middle', 'target' => '_blank',
					]
				) ?>
			<?= Html::endTag('div') ?>
		<?= Html::endTag('div') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('footer') ?>

<!- END - FOOTER -!>
