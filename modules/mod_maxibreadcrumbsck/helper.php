<?php
/** Adapted from the native module from Joomla! breadcrumbs
 * @copyright	Copyright (C) 2010 Cédric KEIFLIN alias ced1870
 * http://www.joomlack.fr
 * Module Maxibreadcrumbs_CK
 * @license		GNU/GPL
**/

// no direct access
defined('_JEXEC') or die;

class modMaxibreadcrumbsckHelper
{
	public static function getList(&$params)
	{
		// Get the PathWay object from the application
		$app		= JFactory::getApplication();
		$pathway	= $app->getPathway();
		$items		= $pathway->getPathWay();

		$count = count($items);
		$crumbs	= array();
		for ($i = 0; $i < $count; $i ++)
		{
			$crumbs[$i] = new stdClass();
			$crumbs[$i]->name = stripslashes(htmlspecialchars($items[$i]->name, ENT_COMPAT, 'UTF-8'));
			$names_noparam = explode('[',$items[$i]->name);
			$crumbs[$i]->name = $names_noparam[0];
			$names = explode('||',$names_noparam[0]);
			$crumbs[$i]->name = $names[0];
			if (isset($names[1])) $items[$i]->desc = $names[1] ;
			$crumbs[$i]->name = $names[0];
			$crumbs[$i]->link = JRoute::_($items[$i]->link);
		}

		if ($params->get('showHome', 1))
		{
			$item = new stdClass();
			$item->name = htmlspecialchars($params->get('homeText', JText::_('MOD_BREADCRUMBSCK_HOME')));
			$item->link = JRoute::_('index.php?Itemid='.$app->getMenu()->getDefault()->id);
			array_unshift($crumbs, $item);
		}

		return $crumbs;
	}

	/**
	 * Set the breadcrumbs separator for the breadcrumbs display.
	 *
	 * @param	string	$custom	Custom xhtml complient string to separate the
	 * items of the breadcrumbs
	 * @return	string	Separator string
	 * @since	1.5
	 */
	public static function setSeparator($custom = null)
	{
		$lang = JFactory::getLanguage();

		// If a custom separator has not been provided we try to load a template
		// specific one first, and if that is not present we load the default separator
		if ($custom == null) {
			if ($lang->isRTL()){
				$_separator = JHtml::_('image','system/arrow_rtl.png', NULL, NULL, true);
			}
			else{
				$_separator = JHtml::_('image','system/arrow.png', NULL, NULL, true);
			}
		} else {
			$_separator = htmlspecialchars($custom);
		}

		return $_separator;
	}
}
