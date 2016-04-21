<?php
/** Adapted from the native module from Joomla! breadcrumbs
 * @copyright	Copyright (C) 2010 Cédric KEIFLIN alias ced1870
 * http://www.joomlack.fr
 * Module Maxibreadcrumbs CK
 * @license		GNU/GPL
**/

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

// Get the breadcrumbs
$list	= modMaxibreadcrumbsckHelper::getList($params);
$count	= count($list);

// Set the default separator
$separator = modMaxibreadcrumbsckHelper::setSeparator($params->get('separator'));
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_maxibreadcrumbsck', $params->get('layout', 'default'));