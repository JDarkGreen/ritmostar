<?php
/**
 * @version		$Id: default.php 19022 2010-10-02 14:51:33Z infograf768 $
 * @package		Joomla.Site
 * @subpackage	mod_breadcrumbs
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>

<div class="breadcrumbs<?php echo $moduleclass_sfx; ?>">
<?php if ($params->get('showHere', 1))
	{
		echo '<span class="showHere">' .JText::_('MOD_BREADCRUMBSCK_HERE').'</span>';
	}

	// Get rid of duplicated entries on trail including home page when using multilanguage
	for ($i = 0; $i < $count; $i ++)
	{
		if ($i == 1 && !empty($list[$i]->link) && !empty($list[$i-1]->link) && $list[$i]->link == $list[$i-1]->link)
		{
			unset($list[$i]);
		}
	}

	// Find last and penultimate items in breadcrumbs list
	end($list);
	$last_item_key = key($list);
	prev($list);
	$penult_item_key = key($list);

	// Generate the trail
	foreach ($list as $key=>$item) :
	// Make a link if not the last item in the breadcrumbs
	$show_last = $params->get('showLast', 1);
	if ($key != $last_item_key)
	{
		// Render all but last item - along with separator
		if (!empty($item->link))
		{
			if (isset($item->desc) && $params->get('showDesc', 1) == 1) {
				echo '<a href="'.$item->link.'" class="pathway">'.$item->name.' <span class="pathwaydesc">'.$item->desc.'</span></a>';
			} else {
				echo '<a href="'.$item->link.'" class="pathway">'.$item->name.'</a>';
			}
		}
		else
		{
			echo '<span>' . $item->name . '</span>';
		}

		if (($key != $penult_item_key) || $show_last)
		{
			echo ' '.$separator.' ';
		}

	}
	elseif ($show_last)
	{
		// Render last item if reqd.
		echo '<span>' . $item->name . '</span>';
	}
	endforeach; ?>
</div>
