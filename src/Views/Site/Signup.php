<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *        @view: site[signup]
 *       @since: 1.0
 *         @yii: 3.0
 **/

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\User */

use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

$this->title = 'Register';
$this->params['breadcrumbs_theme'][] = $this->title;

?>

<?= Html::beginTag('div', ['class' => 'peers ai-s fxw-nw h-100vh']) ?>

	<?= Html::beginTag('div', ['class' => 'd-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv',
		'style' => 'background-image: url("/images/logos/bg.jpg', ]) ?>
		<?= Html::beginTag('div', ['class' => 'pos-a centerXY']) ?>
			<?= Html::beginTag('div', ['class' => 'bgc-white bdrs-50p pos-r',
				'style' => 'width: 120px; height: 120px;', ]) ?>
				<?= Html::img('/images/logos/logo.png', $options = ['class' => 'pos-a centerXY', 'alt' => '']) ?>
			<?= Html::endTag('div') ?>
		<?= Html::endTag('div') ?>
	<?= Html::endTag('div') ?>

	<?= Html::beginTag('div', ['class' => 'col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r',
		'style' => 'min-width: 320px;', ]) ?>

		<?= Html::beginTag('h1', ['class' => 'text-center c-grey-900 mb-40']) ?>
			<?= '<b>' . Html::encode($this->title) . '</b>' ?>
		<?= Html::endTag('h1') ?>

		<?php $form = ActiveForm::begin([
			'id' => 'form-signup',
			'layout' => 'horizontal',
			'fieldConfig' => [
				'template' => '{input}{label}{hint}{error}',
					'horizontalCssClasses' => [
						'label' => '',
						'offset' => '',
						'wrapper' => '',
						'error' => 'text-center',
						'hint' => '',
					],
				'options' => ['class' => 'form-label-group'],
			],
			'options' => ['class' => 'form-signup'],
			'validateOnType' => false,
			'validateOnChange' => false, ])
		?>

			<?= $form->field($model, 'username')->textInput([
					'autofocus' => true,
					'oninput' => 'this.setCustomValidity("")',
					'oninvalid' => 'this.setCustomValidity("' . \Yii::t('app', 'Enter Username Here') . '")',
					'placeholder' => \Yii::t('app', 'Username'),
					'required' => true,
					'tabindex' => '1',
				])->label('<b>' . \Yii::t('app', 'Username') . '</b>')
			?>

			<?= $form->field($model, 'email', [
					'inputOptions' => [
						'oninput' => 'this.setCustomValidity("")',
						'oninvalid' => 'this.setCustomValidity("' . \Yii::t('app', 'Enter Email Here') . '")',
						'placeholder' => \Yii::t('app', 'Email'),
						'required' => true,
						'tabindex' => '2',
					],
				])->label('<b>' . \Yii::t('app', 'Email') . '</b>')
			?>

			<?= $form->field($model, 'password')->passwordInput([
					'oninput' => 'this.setCustomValidity("")',
					'oninvalid' => 'this.setCustomValidity("' . \Yii::t('app', 'Enter Password Here') . '")',
					'placeholder' => \Yii::t('app', 'Password'),
					'required' => true,
					'tabindex' => '3',
				])->label('<b>' . \Yii::t('app', 'Password') . '</b>')
			?>

			<?= $form->field($model, 'verifyCode', [
					'labelOptions' => ['id' => 'verifyCode'],
				])->widget(Captcha::class, [
					'template' => '{input}<div class="text-center">' . '<b>' .
						\Yii::t('app', 'Captcha Code') . ':' . '</b>' . '{image}</div>',
					'options' => [
						'class' => 'form-control',
						'for' => 'captcha',
						'oninput' => 'this.setCustomValidity("")',
						'oninvalid' => 'this.setCustomValidity("' . \Yii::t('app', 'Enter Captcha Code Here') . '")',
						'placeholder' => \Yii::t('app', 'Captcha Code'),
						'required' => true,
						'style' => 'margin-bottom:10px',
						'tabindex' => '4',
					],
				])->label('<b>' . \Yii::t('app', 'Captcha Code') . '</b>')
			?>

			<?= Html::beginTag('div', ['class' => 'form-group']) ?>
				<?= Html::submitButton(\Yii::t('app', 'Signup'), [
					'class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button', 'tabindex' => '5',
				]) ?>
			<?= Html::endTag('div') ?>

		<?php ActiveForm::end() ?>

	<?= Html::endTag('div') ?>

<?php echo Html::endTag('div');
