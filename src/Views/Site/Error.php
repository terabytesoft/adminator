<?php

/**
 * @link https://github.com/terabytesoft
 * @copyright Copyright (c) 2018 TerabyteSoft S.A.
 * @license https://choosealicense.com/licenses/bsd-3-clause/
 *
 * @author: Wilmer Arámbula <wilmer.arambula@gmail.com>
 */

/**
 * View/Theme: Error.php
 **/

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

?>

<!- PAGES ERROR !->
<?= Html::beginTag('div', ['class' => 'peer-greed d-f ai-c jc-c fxd-r pos-r p-30']) ?>
	<?= Html::beginTag('div', ['class' => 'mR-60']) ?>
		<?php
		switch ($exception->statusCode) {
			case '404':
				echo Html::img('/images/logos/404.png', $options = ['alt' => '#']);
				break;
			case '500':
				echo Html::img('/images/logos/500.png', $options = ['alt' => '#']);
				break;
			default:
				break;
		}
		?>
	<?= Html::endTag('div') ?>
	<?= Html::beginTag('div', ['class' => 'd-f jc-c fxd-c']) ?>
		<?= Html::tag('h1', Html::encode($this->title), ['class' => 'mB-30 fw-900 lh-1 c-red-500', 'style' => 'font-size: 60px;']) ?>
		<?= Html::beginTag('div', ['class' => 'alert alert-danger']) ?>
			<?= nl2br(Html::encode($message)) ?>
		<?= Html::endTag('div') ?>
		<?php
		switch ($exception->statusCode) {
			case '404':
				echo Html::tag('h4', 'Oops Map not Found.', ['class' => 'mB-10 fsz-lg c-grey-900 tt-c']);
				echo Html::tag(
					'p',
					'The Map yot are looking for does not exist or has been moved.',
					[
						'class' => 'mB-30 fsz-def c-grey-700',
					]
				);
				break;
			case '500':
				echo Html::tag('h4', 'Internal server error', ['class' => 'mB-10 fsz-lg c-grey-900 tt-c']);
				echo Html::tag(
					'p',
					'Something goes wrong with our servers, please try again later.',
					[
						'class' => 'mB-30 fsz-def c-grey-700',
					]
				);
				break;
			default:
				echo Html::tag(
					'h4',
					'The above error occurred while the Web server was processing your request.',
					[
						'class' => 'mB-10 fsz-lg c-grey-900 tt-c',
					]
				);
				echo Html::tag(
					'p',
					'Please contact us if you think this is a server error. Thank you.',
					[
						'class' => 'mB-30 fsz-def c-grey-700',
					]
				);
				break;
		}
		?>
		<?= Html::beginTag('div') ?>
			<?= Html::a('Go to Home', \Yii::$app->homeUrl, ['class' => 'btn btn-primary', 'type' => 'primary']) ?>
		<?= Html::endTag('div') ?>
	<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<!- END - PAGES ERROR !->
