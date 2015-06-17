<?php
defined('_JEXEC') or die;
jimport('joomla.controller');
/**
 * Get instance of a controller
 * @var [type]
 */
$controller=JControllerLegacy::getInstance('MyComp');
/**
 * get execute the method that name follow &task=nameOfMethod
 */
$controller->execute(JRequest::getCmd('task'));

$controller->redirect();