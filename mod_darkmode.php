<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_darkmode
 *
 * @copyright   (C) 2007 Rob Huijben <https://www.robhuijben.com/>
 * @license     GNU General Public License version 2 or later; see LICENSE.md
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

$switcherLabel = $params->get('switcher_label', 0);
$iconStyle = $params->get('icon_style', 0);

Text::script('var iconStyle = ' . json_encode($iconStyle) . ';');

require \Joomla\CMS\Helper\ModuleHelper::getLayoutPath('mod_darkmode', $params->get('layout', 'default'));
