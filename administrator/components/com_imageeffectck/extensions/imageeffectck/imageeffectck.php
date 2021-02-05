<?php

/**
 * @copyright	Copyright (C) 2015 Cédric KEIFLIN alias ced1870
 * http://www.joomlack.fr
 * http://www.template-creator.com
 * @license		GNU/GPL
 * */

defined('_JEXEC') or die('Restricted access');
jimport('joomla.event.plugin');

class plgSystemImageeffectck extends JPlugin {

	function __construct(&$subject, $params) {
		parent::__construct($subject, $params);
	}

	public function onBeforeRender() {
		global $ckjqueryisloaded;
		$app = JFactory::getApplication();
		$doc = JFactory::getDocument();
		$doctype = $doc->getType();
		$input = $app->input;

		// if in admin we stop
		if ($app->isAdmin()) {
			return false;
		}

		// if not HTML we stop
		if ($doctype !== 'html') {
			return;
		}

		// if edit mode we stop
		if ($input->get('layout') == 'edit' || $input->get('controller') == 'config.display.modules') {
			return;
		}
		
		// load jquery
		if (version_compare(JVERSION, '3') >= 1 ) { 
			JHTML::_('jquery.framework');
		} else if (! $ckjqueryisloaded) {
			JHtml::script('plg_system_imageeffectck/jquery.min.js', false, true, false);
		}
//		JHtml::stylesheet('plg_system_imageeffectck/imageeffectck.css', array('relative' => true));
		// check if the override exists in the template
		if (file_exists(JPATH_ROOT . '/templates/' . $doc->template . '/css/plg_system_imageeffectck/imageeffectck.css')) {
			$cssfilesrc = 'templates/' . $doc->template . '/css/plg_system_imageeffectck/imageeffectck.css';
		} else {
			$cssfilesrc = 'media/plg_system_imageeffectck/css/imageeffectck.css?ver=2.2.7';
		}
		$doc->addStylesheet(JUri::root(true) . '/' . $cssfilesrc);
		JHtml::script('plg_system_imageeffectck/imageeffectck.js', false, true, false);

		// if the component is installed, render the custom styles
		$helper2file = JPATH_ROOT . '/administrator/components/com_imageeffectck/helpers/imageeffectck.php';
		if (file_exists($helper2file)) {
			include_once($helper2file);
			ImageeffectckHelper2::loadAssets();
		}
		
	}

	/**
	 * Test if there is already a unit, else add the px
	 *
	 * @param string $value
	 * @return string
	 */
	static function testUnit($value) {
		if ((stristr($value, 'px')) OR (stristr($value, 'em')) OR (stristr($value, '%')) OR (stristr($value, 'auto')) ) {
			return $value;
		}

		if ($value == '') {
			$value = 0;
		}

		return $value . 'px';
	}

	/**
	 * Convert a hexa decimal color code to its RGB equivalent
	 *
	 * @param string $hexStr (hexadecimal color value)
	 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
	 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
	 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
	 */
	static function hex2RGB($hexStr, $opacity) {
		if ($opacity > 1) $opacity = $opacity/100;
		$hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
		$rgbArray = array();
		if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
			$colorVal = hexdec($hexStr);
			$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
			$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
			$rgbArray['blue'] = 0xFF & $colorVal;
		} elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
			$rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
			$rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
			$rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
		} else {
			return false; //Invalid hex color code
		}
		$rgbacolor = "rgba(" . $rgbArray['red'] . "," . $rgbArray['green'] . "," . $rgbArray['blue'] . "," . $opacity . ")";

		return $rgbacolor;
	}
}