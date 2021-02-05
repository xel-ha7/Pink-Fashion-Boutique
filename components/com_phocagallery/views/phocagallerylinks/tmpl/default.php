<?php
/*
 * @package Joomla
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component Phoca Gallery
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die('Restricted access');
//Joomla\CMS\HTML\HTMLHelper::_('behavior.tooltip');

echo '<div id="phocagallery-links">'
.'<fieldset class="adminform">'
.'<legend>'.JText::_( 'COM_PHOCAGALLERY_SELECT_TYPE' ).'</legend>'
.'<ul>'
.'<li class="icon-16-edb-categories"><a href="'.$this->t['categories'].'">'.JText::_('COM_PHOCAGALLERY_CATEGORIES').'</a></li>'
//.'<li class="icon-16-edb-category"><a href="'.$this->t['COM_PHOCAGALLERY_CATEGORY'].'">'.JText::_('COM_PHOCAGALLERY_CATEGORY').'</a></li>'
.'<li class="icon-16-edb-images"><a href="'.$this->t['images'].'">'.JText::_('COM_PHOCAGALLERY_IMAGES').'</a></li>'
.'<li class="icon-16-edb-image"><a href="'.$this->t['image'].'">'.JText::_('COM_PHOCAGALLERY_IMAGE').'</a></li>'
.'<li class="icon-16-edb-switchimage"><a href="'.$this->t['switchimage'].'">'.JText::_('COM_PHOCAGALLERY_SWITCH_IMAGE').'</a></li>'
.'<li class="icon-16-edb-slideshow"><a href="'.$this->t['slideshow'].'">'.JText::_('COM_PHOCAGALLERY_SLIDESHOW').'</a></li>'
.'</ul>'
.'</div>'
.'</fieldset>'
.'</div>';
?>
