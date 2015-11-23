<?php 
// No direct access
defined('_JEXEC') or die;

// This is the template for each raid

?>



<div class="wbd-raid <?php echo $raid->id ?> <?php echo $raid->expviewclass ?>">	
    <!-- Raid Name -->
    <div class="wbd-title" style="background-image:url('<?php echo $raid->imggrey ?>')">
        
        <div class="wbd-title-progress" style="background-image:url('<?php echo $raid->img ?>'); width:<?php echo $defeatedrate ?>%"></div>
        
        <h3 class="wbd-raid-title" title="<?php echo JText::_('MOD_WOWBOSS_DRAENOR_CLICKTOSHOW') ?>">
            <div class="wbd-arrow"></div>
            <span><?php echo $raid->name ?></span>
        </h3>
        
        <div class="wbd-progress-bar">
            <span class="wbd-normal" style="width:<?php echo $defeatedrate ?>%"></span>
            <span class="wbd-heroic" style="width:<?php echo $heroicrate ?>%"></span>
            <span class="wbd-mythic" style="width:<?php echo $mythicrate ?>%"></span>
        </div>
    
    </div>

    <div class="wbd-boss-list">

    <!-- Start loop for each boss -->
    <?php foreach($bosses as $boss): ?>	
        

        <div class="wbd-boss <?php echo $boss->id ?> clearfix">
            <div class="wbd-boss-portrait" style="background-image:url('<?php echo $boss->bossimg ?>')"></div>
            
            <div class="wbd-boss-info">
                
                <?php echo $boss->bosslinkopen ?>
                
                <span class="wbd-boss-name"><?php echo $boss->name ?></span><br>
                <small class="wbd-boss-status wbd-<?php echo $boss->status ?>"><?php echo $boss->statuslabel ?></small>
                
                <?php echo $boss->bosslinkclose ?>
            </div>
        </div>
        

    <?php endforeach; ?>
    <!-- End loop for each boss --> 

    </div>

</div>

