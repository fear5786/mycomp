<?

defined('_JEXEC') or die;
jimport('joomla.controller');
class MyCompController extends JControllerAdmin{
	function display($cachable = false, $urlparams = false){
		echo 'I am Here without task';
	}

	function create(){
		$doc=JFactory::getDocument();
		$doc->addStyleSheet(JURI::root().'media/com_mycomp/css/frontend_create_task.css');
		$doc->addScript(JURI::root().'media/com_mycomp/js/frontend_createtask.js');
		echo '<div id="welcome">Welcome to Create the task</div>';
	}

	function delete(){
		$app=JFactory::getApplication();
		$id=JRequest::getVar('id');
		echo 'You want to delete $id';
		$app->close();
	}
}