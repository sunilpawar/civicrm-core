<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 */

/**
 * This class generates form components for component preferences.
 */
class CRM_Admin_Form_Preferences_Member extends CRM_Admin_Form_Preferences {

  /**
   * This should only be populated programmatically via the settings metadata.
   *
   * DO NOT add new settings to these - they need to be migrated to being declared in metadata.
   *
   * @var array
   */
  protected $_settings = [
    'default_renewal_contribution_page' => CRM_Core_BAO_Setting::MEMBER_PREFERENCES_NAME,
  ];

}
