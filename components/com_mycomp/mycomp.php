<?php
defined('_JEXEC') or die;
jimport('joomla.controller');
/**
 * Creating Controller Instance
 */
$controller=JControllerLegacy::getInstance('MyComp');

/**
 * Execute Task
 */
$controller->execute(JRequest::getCmd('task'));

/**
 * If Redirect Set
 */
$controller->redirect();