<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model cjtterabytesoft\themes\adminator\forms\LoginForm */

use Yiisoft\Yii\Bootstrap4\ActiveForm;
use Yiisoft\Yii\Captcha\Captcha;
use Yiisoft\Yii\Bootstrap4\Html;
use Yiisoft\Yii\Bootstrap4\Breadcrumbs;
use yii\helpers\Url;

$imagesUrl = TerabyteSoft\Themes\Adminator\Assets\Images\ImagesAsset::register($this);
$imagesUrl = $this->app->getAlias($imagesUrl->baseUrl);

?>

<?= Html::beginTag('div', ['class' => 'peers ai-s fxw-nw', 'style' =>  'height: calc(100vh - 70px)']) ?>

    <?= Html::beginTag('div', ['class' => 'bg d-n@sm- peer peer-greed pos-r bgr-n bgpX-c bgpY-c bgsz-cv',
        'style' => 'background-image: url(' . $imagesUrl . '/Logos/Bg.jpg)']) ?>

        <?= Html::beginTag('div', ['class' => 'pos-a centerXY']) ?>
            <?= Html::beginTag('div', ['class' => 'bgc-white bdrs-50p pos-r',
                'style' => 'width: 120px; height: 120px;']) ?>
                <?= Html::img($imagesUrl . '/Logos/Logo.png', $options = ['class' => 'pos-a centerXY', 'alt' => '']) ?>
            <?= Html::endTag('div') ?>

        <?= Html::endTag('div') ?>

    <?= Html::endTag('div') ?>

    <?= Html::beginTag('div', ['class' => 'col-12 col-md-4 peer pX-40 scrollable pos-r',
        'style' => 'min-width: 320px;']) ?>

		<?= $content ?>

    <?= Html::endTag('div') ?>

<?php echo Html::endTag('div');
