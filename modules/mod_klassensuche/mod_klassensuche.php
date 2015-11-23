<?php
/**
 * @version SVN: $Id: mod_#module#.php 96 2012-09-21 Cmstyles.de $
 * @package    Klassensuche
 * @subpackage Base
 * @copyright    Copyright (C) 2012 Cmstyles.de
 * http://www.cmstyles.de
 * Module Cmprogress - Joomla! 2.5
 * @license  GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access'); // no direct access

require_once (dirname(__FILE__).DS.'helper.php');
// $item = mod_klassensuche_searchHelper::getItem($params);


$moduleName         = 'mod_klassensuche';
$modulePath         = 'modules/'.$moduleName.'/';
// if user set it
$moduleId           = $params->get('module_id');

$coverLetterLink    = $params->get('cover_letter_link');
$start				= $params->get('start');
$themeClass			= $params->get('themeClass');

// class declaration
$warriorStatus     = $params->get('warrior_status');
$warriorInfo       = $params->get('warrior_info');
$warriorclass1	   = $params->get('warrior_class1');
$warriorclass2	   = $params->get('warrior_class2');
$warriorclass3	   = $params->get('warrior_class3');
$paladinStatus     = $params->get('paladin_status');
$paladinInfo       = $params->get('paladin_info');
$paladinclass1	   = $params->get('paladin_class1');
$paladinclass2	   = $params->get('paladin_class2');
$paladinclass3	   = $params->get('paladin_class3');
$hunterStatus      = $params->get('hunter_status');
$hunterInfo        = $params->get('hunter_info');
$hunterclass1	   = $params->get('hunter_class1');
$hunterclass2	   = $params->get('hunter_class2');
$hunterclass3	   = $params->get('hunter_class3');
$rogueStatus       = $params->get('rogue_status');
$rogueInfo         = $params->get('rogue_info');
$rogueclass1	   = $params->get('rogue_class1');
$rogueclass2	   = $params->get('rogue_class2');
$rogueclass3	   = $params->get('rogue_class3');
$priestStatus      = $params->get('priest_status');
$priestInfo        = $params->get('priest_info');
$priestclass1	   = $params->get('priest_class1');
$priestclass2	   = $params->get('priest_class2');
$priestclass3	   = $params->get('priest_class3');
$deathknightStatus = $params->get('deathknight_status');
$deathknightInfo   = $params->get('deathknight_info');
$deathknightclass1 = $params->get('deathknight_class1');
$deathknightclass2 = $params->get('deathknight_class2');
$deathknightclass3 = $params->get('deathknight_class3');
$shamanStatus      = $params->get('shaman_status');
$shamanInfo        = $params->get('shaman_info');
$shamanclass1	   = $params->get('shaman_class1');
$shamanclass2	   = $params->get('shaman_class2');
$shamanclass3	   = $params->get('shaman_class3');
$mageStatus        = $params->get('mage_status');
$mageInfo          = $params->get('mage_info');
$mageclass1	       = $params->get('mage_class1');
$mageclass2	       = $params->get('mage_class2');
$mageclass3	       = $params->get('mage_class3');
$warlockStatus     = $params->get('warlock_status');
$warlockInfo       = $params->get('warlock_info');
$warlockclass1	   = $params->get('warlock_class1');
$warlockclass2	   = $params->get('warlock_class2');
$warlockclass3	   = $params->get('warlock_class3');
$druidStatus       = $params->get('druid_status');
$druidInfo         = $params->get('druid_info');
$druidclass1	   = $params->get('druid_class1');
$druidclass2	   = $params->get('druid_class2');
$druidclass3	   = $params->get('druid_class3');
$monkStatus       = $params->get('monk_status');
$monkInfo         = $params->get('monk_info');
$monkclass1	   = $params->get('monk_class1');
$monkclass2	   = $params->get('monk_class2');
$monkclass3	   = $params->get('monk_class3');


$allStatus_wc       = $params->get('all_status_wc');
$allInfo_wc         = $params->get('all_info_wc');
$allStatus_sw       = $params->get('all_status_sw');
$allInfo_sw         = $params->get('all_info_sw');

require(JModuleHelper::getLayoutPath('mod_klassensuche'));
require_once ('helper.php');

?>