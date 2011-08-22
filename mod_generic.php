<?php
defined('_JEXEC') or die('Restricted access');

require_once dirname(__FILE__) . DS . 'helper.php';

$generic = new modGenericHelper();

#if( JRequest::get('POST') ){

require JModuleHelper::getLayoutPath('mod_generic', $params->get('layout', 'default'));
