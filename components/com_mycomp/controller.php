<?

defined('_JEXEC') or die;
jimport('joomla.controller');
class MyCompController extends JControllerAdmin{
	function display($cachable = false, $urlparams = false){
		echo "I am Here without task";
	}

	function create(){
		echo "Welcom to Create the task";
	}

	function delete(){
		$app=JFactory::getApplication();
		$id=JRequest::getVar('id');
		echo "You want to delete $id";
		$app->close();
	}
}