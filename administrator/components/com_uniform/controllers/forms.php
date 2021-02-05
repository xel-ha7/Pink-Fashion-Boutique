<?php

/**
 * @version     $Id: forms.php 19014 2012-11-28 04:48:56Z thailv $
 * @package     JSNUniform
 * @subpackage  Controller
 * @author      JoomlaShine Team <support@joomlashine.com>
 * @copyright   Copyright (C) 2016 JoomlaShine.com. All Rights Reserved.
 * @license     GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */
defined('_JEXEC') or die('Restricted access');
/**
 * Forms controllers of JControllerForm
 * 
 * @package     Controllers
 * @subpackage  Forms
 * @since       1.6
 */
class JSNUniformControllerForms extends JControllerAdmin
{

	protected $option = JSN_UNIFORM;
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 */
	public function __construct($config = array())
	{
		// Get input object
		$this->input = JFactory::getApplication()->input;

		parent::__construct($config);
	}
	/**
	 * Method to get a model object, loading it if required.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  object  The model.
	 *
	 * @since   1.6
	 */
	public function getModel($name = 'form', $prefix = 'JSNUniformModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}

	/**
	 * Removes an item.
	 *
	 * @return  void
	 */
	public function delete()
	{
		JSession::checkToken('post') or die( 'Invalid Token' );
		// Get items to remove from the request.
		$cid = $this->input->getVar('cid', array(), '', 'array');

		if (!is_array($cid) || count($cid) < 1)
		{
			JFactory::getApplication()->enqueueMessage(JText::_($this->text_prefix . '_NO_ITEM_SELECTED'), 'warning');
		}
		else
		{
			// Get the model.
			$model = $this->getModel();

			// Make sure the item ids are integers
			jimport('joomla.utilities.arrayhelper');
			JArrayHelper::toInteger($cid);

			// Remove the items.
			if ($model->delete($cid))
			{
				$this->setMessage(JText::plural("JSN_UNIFORM_FORMS_DELETED", count($cid)));
			}
			else
			{
				$this->setMessage($model->getError());
			}
		}

		$this->setRedirect(JRoute::_('index.php?option=' . $this->option . '&view=' . $this->view_list, false));
	}

	/**
	 *  view select form
	 * 
	 * @return html code
	 */
	public function viewSelectForm()
	{

		$document = JFactory::getDocument();
		$document->addScript('../media/system/js/mootools-core.js');
		$document->addScript('../media/system/js/core.js');
		$document->addScript('../media/system/js/mootools-more.js');
		//$document->addStyleSheet(JSN_URL_ASSETS . '/3rd-party/bootstrap/css/bootstrap.min.css');
		echo JSNUniformHelper::getSelectForm('jform[params][form_id]', 'jform_params_form_id', "content");
	}
	/**
	 * get List form
	 *
	 * @return json
	 */
	public function getListFieldByForm()
	{
		$app = JFactory::getApplication();
		$input = $app->input;
		$getData = $input->getArray($_GET);
		$formId = isset($getData["form_id"])?$getData["form_id"]:0;
		$listField = JSNUniformHelper::getListFieldByForm($formId);
		echo json_encode($listField);
		jexit();
	}
	/**
	 * get List form 
	 */
	public function getListForm()
	{
		$listForm = JSNUniformHelper::getForms();
		echo json_encode($listForm);
		jexit();
	}

	/**
	 * Method to clone an existing module.
	 * @since	1.6
	 */
	public function duplicate()
	{
		JSession::checkToken('post') or die( 'Invalid Token' );
		// Initialise variables.
		$pks = $this->input->getVar('cid', array(), 'post', 'array');
		JArrayHelper::toInteger($pks);

		try
		{
			if (empty($pks))
			{
				throw new Exception(JText::_('JSN_UNIFORM_ERROR_NO_FORM_SELECTED'));
			}
			$model = $this->getModel();
			$model->duplicate($pks);
			$this->setMessage(JText::plural('JSN_UNIFORM_N_FORMS_DUPLICATED', count($pks)));
		}
		catch (Exception $e)
		{
			JFactory::getApplication()->enqueueMessage($e->getMessage(), 'warning');
		}

		$this->setRedirect('index.php?option=com_uniform&view=forms');
	}

    /**
     * Method to export forms.
     * @since	4.1.3
     */
    public function export()
    {
        JSession::checkToken('post') or die( 'Invalid Token' );
        // Initialise variables.
        $pks = $this->input->getVar('cid', array(), 'post', 'array');
        JArrayHelper::toInteger($pks);

        try
        {
            if (empty($pks))
            {
                throw new Exception(JText::_('JSN_UNIFORM_ERROR_NO_FORM_SELECTED'));
            }
            $model = $this->getModel();
            $data = $model->export($pks);
            echo json_encode($data);
            header('Content-disposition: attachment; filename='.(new JDate('now')).'-jsn-uniform.json');
            header('Content-type: application/json');
            exit();

            //$this->setMessage(JText::plural('JSN_UNIFORM_N_FORMS_EXPORTED', count($pks)));
        }
        catch (Exception $e)
        {
	        JFactory::getApplication()->enqueueMessage($e->getMessage(), 'warning');
            $this->setRedirect('index.php?option=com_uniform&view=forms');
        }

        //$this->setRedirect('index.php?option=com_uniform&view=forms');
    }

    /**
     * Method to import form
     * @since	4.1.3
     */
    public function import()
    {
        $jInput = JFactory::getApplication()->input;
        $file = $jInput->files->get('file');
        if($file)
        {
            $json = file_get_contents($file['tmp_name']);
        }
        $data = json_decode($json);

        $model = $this->getModel();
        $keepUserId = $jInput->getStr('keep_user_id', '');
        if ( isset($keepUserId) && $keepUserId == "on" )
        {
            $success = $model->import($data, true);
        }
        else
        {
            $success = $model->import($data, false);
        }

        if ($success)
        {
            $this->setMessage(JText::plural('JSN_UNIFORM_N_FORMS_IMPORTED', count($data)));
        }
        else
        {
            $this->setMessage(JText::sprintf('JSN_UNIFORM_YOU_HAVE_REACHED_THE_LIMITATION_OF_3_FORM_IN_FREE_EDITION', 0) . ' <a class="jsn-link-action" href="index.php?option=com_uniform&view=upgrade">' . JText::_("JSN_UNIFORM_UPGRADE_EDITION") . '</a>', 'warning');
        }
        $this->setRedirect('index.php?option=com_uniform&view=forms');
    }

}
