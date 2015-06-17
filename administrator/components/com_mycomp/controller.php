<?php
defined('_JEXEC') or die();
/**
* 		
*/
class MyCompController extends JControllerAdmin
{
	
	function display($cachable = false, $urlparams = false){
		echo JText::_('COM_MYCOMP_WELCOME');
	}

	function create(){
		echo JText::_('COM_MYCOMP_TASK_CREATE');
	}

	function delete(){
		echo JText::_('COM_MYCOMP_TASK_DELETE');
	}
}