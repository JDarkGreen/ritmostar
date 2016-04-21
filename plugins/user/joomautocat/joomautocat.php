<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Plugins/JoomAutoCat/trunk/joomautocat.php $
// $Id: joomautocat.php 4137 2013-03-11 12:58:59Z chraneco $
/******************************************************************************\
**   JoomGallery User Plugin 'AutoCreation of User Categories' 3.0            **
**   By: JoomGallery::ProjectTeam                                             **
**   Copyright (C) 2009 - 2013 Patrick (aka Chraneco)                         **
**   Released under GNU GPL Public License                                    **
**   License: http://www.gnu.org/copyleft/gpl.html                            **
\******************************************************************************/

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

/**
 * JoomGallery User Plugin, automatically creates categories in JoomGallery
 *
 * @package     Joomla
 * @subpackage  JoomGallery
 * @since       1.5
 */
class plgUserJoomAutoCat extends JPlugin
{
  /**
   * If the stored user is a new one a new category will be created for him
   *
   * Store user method
   * Method is called after user data is stored in the database
   *
   * @param   array   $user     Holds the new user data
   * @param   boolean $isNew    True if a new user is stored
   * @param   boolean $success  True if user was succesfully stored in the database
   * @param   string  $msg      Message
   * @return  void
   * @since   1.5
   */
  public function onUserAfterSave($user, $isnew, $success, $msg)
  {
    if($isnew)
    {
      $this->_createCategory($user);
    }
  }

  /**
   * This method should handle any login logic and report back to the subject
   *
   * @param   array   $user     Holds the user data
   * @param   array   $options  Extra options
   * @return  boolean True on success, false otherwise
   * @since   1.5
   */
  public function onUserLogin($user, $options)
  {
    if($this->params->get('onlogin'))
    {
      $db           = JFactory::getDBO();
      $user_object  = JUser::getInstance($user['username']);

      $user['id']   = $user_object->get('id');
      $user['name'] = $user['fullname'];

      $query = $db->getQuery(true)
            ->select('COUNT(cid)')
            ->from('#__joomgallery_catg')
            ->where('owner = '.(int) $user['id']);
      $db->setQuery($query);
      if(!$db->loadResult())
      {
        $this->_createCategory($user);
      }
    }

    return true;
  }

  /**
   * Creates the category with the help of the interface class
   *
   * @param   array $user Holds the user data
   * @return  void
   * @since   1.5
   */
  protected function _createCategory($user)
  {
    // Get the interface
    require_once JPATH_ROOT.'/components/com_joomgallery/interface.php';
    $jinterface = new JoomInterface();

    // Create the category
    switch($this->params->get('categoryname'))
    {
      case 0:
        if($jinterface->getJConfig('jg_realname'))
        {
          $category->name = $user['name'];
        }
        else
        {
          $category->name = $user['username'];
        }
        break;
      case 1:
        $category->name   = $user['name'];
        break;
      default:
        $category->name   = $user['username'];
        break;
    }
    $category->owner  = $user['id'];
    if($parent = $this->params->get('parent'))
    {
      $category->parent_id = intval($parent);
    }
    if($access = $this->params->get('access'))
    {
      $category->access = $access;
    }
    $category->published = $this->params->get('published');

    $jinterface->createCategory($category);
  }
}