<?php
/**
 * @version     $Id: view.html.php 19014 2012-11-28 04:48:56Z thailv $
 * @package     JSNUniform
 * @subpackage  Configuration
 * @author      JoomlaShine Team <support@joomlashine.com>
 * @copyright   Copyright (C) 2016 JoomlaShine.com. All Rights Reserved.
 * @license     GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Configuration view of JSN Framework Sample component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_uniform
 * @since       1.5
 */
class JSNUniformViewConfiguration extends JSNConfigView
{

	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a JError object.
	 */
	function display($tpl = null)
	{
		// Get config parameters
		$this->_document = JFactory::getDocument();
		$this->_config = JSNConfigHelper::get();

		// Initialize toolbar
		JSNUniformHelper::initToolbar('JSN_UNIFORM_CONFIGURATION_MANAGER', 'uniform-config');

		// Get messages
		$msgs = '';

		if ( ! $this->_config->get('disable_all_messages'))
		{
			$msgs = JSNUtilsMessage::getList('CONFIGURATION');
			$msgs = count($msgs) ? JSNUtilsMessage::showMessages($msgs) : '';
		}

		// Load the submenu.
		$input = JFactory::getApplication()->input;
		JSNUniformHelper::addSubmenu($input->get('view', 'configuration'));

		// Assign variables for rendering
		$this->assignRef('msgs', $msgs);

		// Display the template
		parent::display($tpl);

		if (JFactory::getUser()->getParam('editor') == 'jce')
		{
			// do nothing
		}
		elseif (JPluginHelper::isEnabled('editors', 'tinymce') == true)
		{
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/tinymce.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/table/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/link/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/image/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/code/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/hr/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/charmap/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/autolink/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/plugins/lists/plugin.min.js');
			JSNHtmlAsset::addStyle(JUri::root(true) . '/media/editors/tinymce/plugins/importcss/plugin.min.js');
			JSNHtmlAsset::addScript(JUri::root(true) . '/media/editors/tinymce/themes/modern/theme.min.js');
			JSNHtmlAsset::addStyle(JUri::root(true) . '/media/editors/tinymce/skins/lightgray/content.inline.min.css');
			JSNHtmlAsset::addStyle(JUri::root(true) . '/media/editors/tinymce/skins/lightgray/content.min.css');
			JSNHtmlAsset::addStyle(JUri::root(true) . '/media/editors/tinymce/skins/lightgray/skin.min.css');
			JSNHtmlAsset::addStyle(JUri::root(true) . '/media/editors/tinymce/skins/lightgray/skin.ie7.min.css');
		}
		// Load assets
		JSNUniformHelper::addAssets();
		$this->_addAssets();
	}

	/**
	 * Add the libraries css and javascript
	 *
	 * @return void
	 */
	private function _addAssets()
	{
		$cConfig 		= JSNConfigHelper::get('com_uniform');
		$googleApiKey 	= '';
		if (isset($cConfig->form_google_map_api_key) && $cConfig->form_google_map_api_key != '')
		{
			$googleApiKey = '&key=' . $cConfig->form_google_map_api_key;
		}

		JSNHtmlAsset::addStyle(JSN_URL_ASSETS . '/3rd-party/jquery-tipsy/tipsy.css');
		JSNHtmlAsset::addStyle(JSN_URL_ASSETS . '/3rd-party/jquery-jwysiwyg/jquery.wysiwyg-0.9.css');
		$formAction = $this->_config->get('form_action');
		$this->_document->addScriptDeclaration(" var currentAction = {$formAction}; ");

		$arrayTranslated = array(
			'JSN_UNIFORM_BUTTON_SAVE',
			'JSN_UNIFORM_BUTTON_CANCEL',
			'JSN_UNIFORM_EMAIL_SUBMITTER_TITLE',
			'JSN_UNIFORM_EMAIL_ADDRESS_TITLE',
			'JSN_UNIFORM_YOU_CAN_NOT_HIDE_THE_COPYLINK',
			'JSN_UNIFORM_UPGRADE_EDITION_TITLE',
			'JSN_UNIFORM_UPGRADE_EDITION',
			'JSN_UNIFORM_SELECT_THE_ACTION_TO_TAKE_AFTER',
			'JSN_UNIFORM_SET_THE_FOLDER_TO_STORE',
			'JSN_SAMPLE_DISABLE_SHOW_COPYRIGHT_DES'
		);
		JSNHtmlAsset::registerDepends('uniform/libs/googlemaps/jquery.ui.map', array('jquery', 'jquery.ui'));
		JSNHtmlAsset::registerDepends('uniform/libs/googlemaps/jquery.ui.map.services', array('jquery', 'jquery.ui', 'uniform/libs/googlemaps/jquery.ui.map'));
		JSNHtmlAsset::registerDepends('uniform/libs/googlemaps/jquery.ui.map.extensions', array('jquery', 'jquery.ui', 'uniform/libs/googlemaps/jquery.ui.map'));
		$uri = JUri::getInstance();

		//if ($googleApiKey != '')
		//{
			JSNHtmlAsset::addScript($uri->getScheme() . '://maps.googleapis.com/maps/api/js?v=3.23' . $googleApiKey . '&libraries=places');
		//}
		$edition = defined('JSN_UNIFORM_EDITION') ? strtolower(JSN_UNIFORM_EDITION) : "free";
		$defaultEditor = JFactory::getUser()->getParam('editor');

		if (empty($defaultEditor))
		{
			$defaultEditor = JFactory::getConfig()->get('editor');
		}

		echo JSNHtmlAsset::loadScript(
			'jsn/core',
			array(
				'lang' => JSNUtilsLanguage::getTranslated(array(
					'JSN_EXTFW_GENERAL_LOADING',
					'JSN_EXTFW_GENERAL_CLOSE'
				))
			),
			true
		);

		echo JSNHtmlAsset::loadScript(
			'jsn/config',
			array(
				'language' => array(
					'JSN_EXTFW_GENERAL_CLOSE' => JText::_('JSN_EXTFW_GENERAL_CLOSE')
				)
			),
			true
		);

		echo JSNHtmlAsset::loadScript(
			'uniform/configuration',
			array(
				'language' => JSNUtilsLanguage::getTranslated($arrayTranslated),
				'edition' => $edition,
				'editor' => $defaultEditor
			),
			true
		);
    }
}
