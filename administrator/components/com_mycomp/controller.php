<?php
defined('_JEXEC') or die();
/**
* 		
*/
class MyCompController extends JControllerAdmin
{
	function display($cachable = false, $urlparams = false){
		JToolBarHelper::Title('My Component');
		echo JText::_('COM_MYCOMP_WELCOME');
	}

	function create(){
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/backend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/backend_createtask.js');
		JToolBarHelper::Title('Create New Task');
		echo '<div id="welcome">'.JText::_('COM_MYCOMP_TASK_CREATE').'</div>';
	}

	function listtask(){
		JToolBarHelper::Title('List All Tasks');
		echo JText::_('COM_MYCOMP_TASK_LIST');
	}

	function help(){
		JToolBarHelper::Title('Help Documentation');
		echo JText::_('COM_MYCOMP_TASK_HELP');
		echo '<h1>This is Help Task <input type="text">';
	}

	function delete(){
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}
}