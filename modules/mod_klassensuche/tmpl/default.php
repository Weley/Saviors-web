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

// no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div id="<?php echo mod_klassensuche_searchHelper::getModuleId($moduleName,$moduleId) ?>" class="<?php echo $params->get('moduleclass_sfx','');?>">
<link rel="stylesheet" href="<?php echo $modulePath ?>/tmpl/css/<?php echo $themeClass ?>" type="text/css" media="screen, projection" />

	  <?php if($warriorStatus){ ?>
	  <?php if($warriorStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
	<div id="warrior">
        <div class="title"><?php echo JText::_('WARRIOR'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($warriorclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(1) ?>"><?php endif; ?> 
		<?php if($warriorclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($warriorStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($warriorInfo) ?>
		<?php endif; ?>
	  </div>
	 </div></a>
	<?php } ?>
	
	  <?php if($paladinStatus){ ?>
	  <?php if($paladinStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="paladin">
        <div class="title"><?php echo JText::_('PALADIN'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($paladinclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(1) ?>"><?php endif; ?> 
		<?php if($paladinclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(2) ?>"><?php endif; ?> 
		<?php if($paladinclass3) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($paladinStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($paladinInfo) ?> 
		<?php endif; ?>
	  </div>
	 </div></a>
	<?php } ?>

	  <?php if($hunterStatus){ ?>
	  <?php if($hunterStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="hunter">
        <div class="title"><?php echo JText::_('HUNTER'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($hunterclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($hunterStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($hunterInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
	
	<?php if($rogueStatus){ ?>
	<?php if($rogueStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="rogue">
        <div class="title"><?php echo JText::_('ROGUE'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($rogueclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($rogueStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($rogueInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
    
		  <?php if($priestStatus){ ?>
		  <?php if($priestStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="priest">
        <div class="title"><?php echo JText::_('PRIEST'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($priestclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(2) ?>"><?php endif; ?> 
		<?php if($priestclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($priestStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($priestInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
	    
			<?php if($deathknightStatus){ ?>
			<?php if($deathknightStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="deathknight">
        <div class="title"><?php echo JText::_('DEATHKNIGHT'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($deathknightclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(1) ?>"><?php endif; ?> 
		<?php if($deathknightclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($deathknightStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($deathknightInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>	

			<?php if($shamanStatus){ ?>
			<?php if($shamanStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="shaman">
        <div class="title"><?php echo JText::_('SHAMAN'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($shamanclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(2) ?>"><?php endif; ?> 
		<?php if($shamanclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($shamanStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($shamanInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>	
    
			<?php if($mageStatus){ ?>
			<?php if($mageStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="mage">
        <div class="title"><?php echo JText::_('MAGE'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($mageclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div> 
	  <div class="info"><?php if($mageStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($mageInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
    
			<?php if($warlockStatus){ ?>
			<?php if($warlockStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="warlock">
        <div class="title"><?php echo JText::_('WARLOCK'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($warlockclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($warlockStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($warlockInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>

			<?php if($monkStatus){ ?>
			<?php if($monkStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="monk">
        <div class="title"><?php echo JText::_('MONK'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($monkclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(1) ?>"><?php endif; ?> 
		<?php if($monkclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(2) ?>"><?php endif; ?> 
		<?php if($monkclass3) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($monkStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($monkInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>

			<?php if($druidStatus){ ?>
			<?php if($druidStatus && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="druid">
        <div class="title"><?php echo JText::_('DRUID'); ?></div><div class="clear"></div>
		<div class="class"><div class="rolle"><?php echo JText::_('ROLL'); ?></div>
		<?php if($druidclass1) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(1) ?>"><?php endif; ?> 
		<?php if($druidclass2) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(2) ?>"><?php endif; ?> 
		<?php if($druidclass3) : ?><img src="<?php echo $modulePath ?>tmpl/images/<?php echo mod_klassensuche_searchHelper::getClassIcon(3) ?>"><?php endif; ?> 
		</div>
	  <div class="info"><?php if($druidStatus) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($druidInfo) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
	
	<?php if($allStatus_wc){ ?>
	<?php if($allStatus_wc && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="klassensuche_all_wc">
        <div class="title"><?php echo JText::_('ALL_WC'); ?></div><div class="clear"></div>
	  <div class="info"><?php if($allStatus_wc) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($allInfo_wc) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
	
		<?php if($allStatus_sw){ ?>
	<?php if($allStatus_sw && $coverLetterLink) : ?><a href="<?php echo $coverLetterLink ?>"><?php endif; ?>
  <div id="klassensuche_all_sw">
        <div class="title"><?php echo JText::_('ALL_SW'); ?></div><div class="clear"></div>
	  <div class="info"><?php if($allStatus_sw) : ?><?php print mod_klassensuche_searchHelper::getClassInfo($allInfo_sw) ?> 
		<?php endif; ?> 
	  </div>
	 </div></a>
	<?php } ?>
 <?php if(mod_klassensuche_searchHelper::domainCheck()) : ?>
<?php endif; ?> 
</div>







