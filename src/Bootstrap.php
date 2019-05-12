<?php

/**
 * (c) CJT TERABYTE INC
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 *        @link: https://github.com/cjtterabytesoft/adminator
 *      @author: Wilmer Arámbula <terabytefrelance@gmail.com>
 *   @copyright: (c) CJT TERABYTE INC
 *      @config: [Bootstrap]
 *       @since: 1.0
 *         @yii: 3.0
 **/

namespace TerabyteSoft\Themes\Adminator;

use yii\base\BootstrapInterface;
use Yiisoft\Yii\Bootstrap4\Html;
use yii\helpers\Url;
use yii\i18n\PhpMessageSource;
use yii\helpers\Yii;

class Bootstrap implements BootstrapInterface
{
	/** @inheritdoc */
	public function __construct()
	{
	}

	/* @inheritdoc */
	public function bootstrap($app)
	{
		/* Config Translation */
		if (!isset($app->get('i18n')->translations['adminator*'])) {
			$app->get('i18n')->translations['adminator*'] = [
				'__class' => PhpMessageSource::class,
				'basePath' => __DIR__ . '/messages',
			];
		}

		/* Copy Avatar Images */
		if (\yii\helpers\BaseFileHelper::filterPath(\Yii::getAlias('@webroot/images'), $options = [])) {
			\yii\helpers\BaseFileHelper::copyDirectory(
				\Yii::getAlias('@cjtterabytesoft/themes/adminator/images/'),
				\Yii::getAlias('@webroot/images')
			);
		}

		$this->renderConfig();
	}

	private function renderConfig()
	{
		switch (true) {
			case (!\Yii::$app->user->isGuest):
				$this->renderDashboardToggle();
				$this->renderDashboardUserNav();
				$this->renderDashboardSidebar();
				break;
			default:
				$this->renderNav();
				break;
		}

		$this->renderFooter();
	}

	private function renderDashboardSidebar()
	{
		$sidebar_menu =	[];

		if (!isset(\Yii::$app->params['dashboard_sidebar'])) {
			$sidebar_menu[] = [
				'label' => Html::tag(
					'span',
					Html::encode(
						\Yii::t('adminator', 'Dashboard')
					),
					['class' => 'title']
				),
				'icon' => Html::tag(
					'span',
					Html::tag(
						'i',
						'',
						['class' => 'c-blue-500 ti-home']
					),
					['class' => 'icon-holder']
				),
				'url' => ['\\#'],
				'linkOptions' => ['class' => 'sidebar-link'],
				'options' => ['class' => 'nav-item'],
			];
			\Yii::$app->params['dashboard_sidebar'] = $sidebar_menu;
		}
	}

	private function renderDashboardToggle()
	{
		$toolbar = [];

		if (!isset(\Yii::$app->params['dashboard_toolbar_nav'])) {
			/* Sidebar Toggle */
			$toolbar[0] = [
				'icon' => Html::tag('i', '', ['class' => 'ti-menu']),
				'url' => 'javascript:void(0);',
				'linkOptions' => ['class' => 'sidebar-toggle', 'id' => 'sidebar-toggle'],
			];
			/* Search Toggle */
			$toolbar[1] = [
				'icon' => Html::tag('i', '', ['class' => 'search-icon ti-search pdd-right-10']) .
					Html::tag('i', '', ['class' => 'search-icon-close ti-close pdd-right-10']),
				'url' => 'javascript:void(0);',
				'options' => ['class' => 'search-box'],
				'linkOptions' => ['class' => 'search-toggle no-pdd-right'],
			];
			/* Search Input */
			$toolbar[2] = [
				'label' => Html::tag('input', '', ['type' => 'text', 'placeholder' => 'Search...']),
				'options' => ['class' => 'search-input'],
			];
			\Yii::$app->params['dashboard_toolbar_nav'] = $toolbar;
		}
	}

	private function renderDashboardUserNav()
	{
		$nav = [];

		if (!isset(\Yii::$app->params['dashboard_user_nav_css'])) {
			\Yii::$app->params['dashboard_user_nav_css'] = '';
		}

		if (!isset(\Yii::$app->params['dashboard_user_nav'])) {
			$nav[0] = [
				'label' => Html::begintag('div', ['class' => 'peer mR-10']) .
					Html::img(
						'@web/images/avatar/profile/30/icon-avatar.png',
						$options = [
							'class' => 'w-2r bdrs-50p',
						]
					) .
					Html::endTag('div') .
					Html::begintag('div', ['class' => 'peer']) .
						Html::tag(
							'span',
							\Yii::$app->user->identity->username,
							$options = [
								'class' => 'fsz-sm c-grey-900',
							]
						) .
					Html::endTag('div'),
				'options' => ['class' => ''],
				'url' => '\\#',
				'linkOptions' => ['class' => 'no-after peers fxw-nw ai-c lh-1'],
				'items' => [
					[
						'label' => Html::tag('i', '', ['class' => 'ti-settings mR-10']) .
							Html::tag('span', 'Settings'),
						'url' => '\\#',
						'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm'],
					],
					[
						'label' => Html::tag('i', '', ['class' => 'ti-user mR-10']) .
							Html::tag('span', 'Profile'),
						'url' => '\\#',
						'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm'],
					],
					[
						'label' => Html::tag('i', '', ['class' => 'ti-email mR-10']) .
							Html::tag('span', 'Messages'),
						'url' => '\\#',
						'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm'],
					],
					[
						'label' => Html::tag('i', '', ['class' => 'ti-power-off mR-10']) .
							Html::tag('span', 'Logout'),
						'url' => Url::to(['/site/logout']),
						'linkOptions' => ['class' => 'd-b td-n pY-5 bgcH-grey-100 c-grey-700 fsz-sm', 'data-method' => 'post']
					],
				],
			];
			\Yii::$app->params['dashboard_user_nav'] = $nav;
		}
	}

	private function renderFooter()
	{
		if (!isset(\Yii::$app->params['author'])) {
			\Yii::$app->params['author'] = 'CJTTERABYTE INC - ' . strftime('%Y') . '.';
		}

		if (!isset(\Yii::$app->params['footer_css'])) {
			\Yii::$app->params['footer_css'] = '';
		}

		if (!isset(\Yii::$app->params['logo-yii'])) {
			\Yii::$app->params['logo-yii'] = 'https://farm2.staticflickr.com/1757/27875123737_f2ab0311e3_o.png';
		}

		$this->renderSocialIcons();
	}

	private function renderSocialIcons()
	{
		if (!isset(\Yii::$app->params['facebook-account'])) {
			\Yii::$app->params['facebook-account'] = 'https://www.facebook.com/username';
		}


		if (!isset(\Yii::$app->params['github-account'])) {
			\Yii::$app->params['github-account'] = 'https://github.com/cjtterabytesoft/adminator';
		}

		if (!isset(\Yii::$app->params['linkedin-account'])) {
			\Yii::$app->params['linkedin-account'] = 'https://www.linkedin.com/in/username';
		}

		if (!isset(\Yii::$app->params['twitter-account'])) {
			\Yii::$app->params['twitter-account'] = 'https://twitter.com/username';
		}
	}

	private function renderNav()
	{


		if (!isset(\Yii::$app->params['nav'])) {
			$menuItems = [
				[
					'label' => Html::tag('i', '', ['class' => 'fa fa-home fa-lg']) . ' ' .
						\Yii::t('adminator', 'Home'), 'url' => ['/site/index'],
				],
				[
					'label' => Html::tag('i', '', ['class' => 'fa fa-spinner fa-lg fa-spin']) . ' ' .
						\Yii::t('adminator', 'About Us'), 'url' => ['/site/about'],
				],
				[
					'label' => Html::tag('i', '', ['class' => 'fa fa-envelope fa-lg']) . ' ' .
						\Yii::t('adminator', 'Contact'), 'url' => ['/site/contact'],
				],
				[
					'label' => Html::tag('i', '', ['class' => 'ion-android-person-add fa-lg']) . ' ' .
						 \Yii::t('adminator', 'Signup'), 'url' => ['/site/signup'],
				],
				[
					'label' => Html::tag('i', '', ['class' => 'fa fa-sign-in fa-lg']) . ' ' .
						\Yii::t('adminator', 'Login'), 'url' => ['/site/login'],
				]
			];
			\Yii::$app->params['nav'] = $menuItems;
		}

		if (!isset(\Yii::$app->params['webname'])) {
			\Yii::$app->params['webname'] = 'My Application';
		}
	}
}
