<?php
defined('_JEXEC') or die('Restricted access');

$doc = & JFactory::getDocument();
$doc->addStyleSheet($this->baseurl . '/components/com_generic/assets/generic.css');
$doc->addStyleDeclaration('#generic { display:none; }');   
$doc->addScriptDeclaration('var generic = true;');
$doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');
?>
<!-- a little HTML magic here -->
