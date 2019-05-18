<?php

namespace TerabyteSoft\Themes\Adminator\Widgets;

use yii\helpers\Url;
use yii\widgets\Menu;
use Yiisoft\Arrays\ArrayHelper;
use Yiisoft\Yii\Bootstrap4\Html;

/**
 * Class Sidebar.
 *
 * It allows to show a menu in the form of a sidebar.
 **/
class Sidebar extends Menu
{
	/**
	 * @var string
	 */
	public $linkTemplate = '<a href="{url}" {linkOptions}>{icon}{label}{right-icon}</a>';

	/**
	 * @var string
	 */
	public $labelTemplate = '<a href="#">{icon}{label}{right-icon}</a>';

	/**
	 * @var string
	 */
	public $submenuTemplate = '<ul class="dropdown-menu">{items}</ul>';
	/**
	 * @var string
	 */
	public $badgeTag = 'small';

	/**
	 * @var string
	 */
	public $badgeClass = 'badge pull-right';

	/**
	 * @var string
	 */
	public $badgeBgClass = 'bg-green';

	/**
	 * @var string
	 */
	public $parentRightIcon = '<span class="arrow"><i class="ti-angle-right"></i></span>';

 	/**
     * Renders the content of a menu item to sidebar.
     *
     * @param array $item the menu item to be rendered. Please refer to [[items]]
	 * to see what data might be in the item.
     *
     * @return string the rendering result
     */
	protected function renderItem($item)
	{
		$item['badgeOptions'] = isset($item['badgeOptions']) ? $item['badgeOptions'] : [];
		if (!ArrayHelper::getValue($item, 'badgeOptions.class')) {
			$bg = isset($item['badgeBgClass']) ? $item['badgeBgClass'] : $this->badgeBgClass;
			$item['badgeOptions']['class'] = $this->badgeClass . ' ' . $bg;
		}
		if (isset($item['items']) && !isset($item['right-icon'])) {
			$item['right-icon'] = $this->parentRightIcon;
		}
		$template = ArrayHelper::getValue(
			$item,
			'template',
			isset($item['url']) ? $this->linkTemplate : $this->labelTemplate
		);
		return strtr($template, [
			'{badge}' => isset($item['badge']) ? Html::tag('small', $item['badge'], $item['badgeOptions']) : '',
			'{icon}' => isset($item['icon']) ? $item['icon'] : '',
			'{right-icon}' => isset($item['right-icon']) ? $item['right-icon'] : '',
			'{url}' => isset($item['url']) ? Url::to($item['url']) : '',
			'{label}' => $item['label'],
			'{linkOptions}' => isset($item['linkOptions']) ? Html::renderTagAttributes($item['linkOptions']) : '',
		]);
	}
}
