<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  mod_darkmode
 *
 * @copyright   (C) 2007 Rob Huijben <https://www.robhuijben.comv>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

Text::script('MOD_DARKMODE_DARK');
Text::script('MOD_DARKMODE_LIGHT');

// Load Switcher script
$app->getDocument()->getWebAssetManager()
    ->registerAndUseScript('mod_darkmode', 'media/mod_darkmode/js/mode-switcher.js', [], ['type' => 'module']);
?>

<button type="button" class="header-item-content dms-button" style="border: none;">
    <span class="header-item-icon">
        <span style="margin: 3px; font-size: 1.2rem; transition: all .6s ease;">🌓</span>
    </span>
    <span class="header-item-text"><?php echo JText::_('MOD_DARKMODE_SWITCHER'); ?></span>
</button>