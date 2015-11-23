<?php

// WOW BOSS MODULE - WOD EDITION - 6.0.0
 
// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();

// Include the syndicate functions only once
require_once( dirname(__FILE__) . '/helper.php' );
 

$wowboss = modWowBossHelper::settings($params);

//Require to provide the necessary class
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));





JLoader::import( 'joomla.version' );
$version = new JVersion();
if (version_compare( $version->RELEASE, '2.5', '<=')) {
    if ( $params->get('loadjquery') == "yes" ) {
        $document = JFactory::getDocument();
        $document->addScript("https://code.jquery.com/jquery-1.11.2.min.js");
   }
} else {
    JHtml::_('jquery.framework');
}

// Loading JS
JHtml::script('mod_wowboss_draenor/mod_wowboss_draenor.js', array(), true);



// CALLING RAIDS
$raids = array(
    // Highmaul
    $raid1 = new Raid(
        "highmaul",
        JText::_('MOD_WOWBOSS_DRAENOR_HIGHMAUL'),
        $params->get('highmaul'),
        // Boss List ("id","name","show/hide","status")
        array(
            new Boss( "kargath" , JText::_('MOD_WOWBOSS_DRAENOR_KARGATH') , $params->get('kargath'), $params->get('kargathlink') ),
            new Boss( "butcher" , JText::_('MOD_WOWBOSS_DRAENOR_BUTCHER') , $params->get('butcher'), $params->get('butcherlink') ),
            new Boss( "brackenspore" , JText::_('MOD_WOWBOSS_DRAENOR_BRACKENSPORE') , $params->get('brackenspore'), $params->get('brackensporelink') ),
            new Boss( "tectus" , JText::_('MOD_WOWBOSS_DRAENOR_TECTUS') , $params->get('tectus'), $params->get('tectuslink') ),
            new Boss( "twinogron" , JText::_('MOD_WOWBOSS_DRAENOR_TWIN_OGRON') , $params->get('twinogron'), $params->get('twinogronlink') ),
            new Boss( "koragh" , JText::_('MOD_WOWBOSS_DRAENOR_KORAGH') , $params->get('koragh'), $params->get('koraghlink') ),
            new Boss( "margok" , JText::_('MOD_WOWBOSS_DRAENOR_MARGOK') , $params->get('margok'), $params->get('margoklink') ),
        ),
        $params->get('highmaul-expview')
    ),
    // Blackrock Foundry
    $raid2 = new Raid(
        "foundry",
        JText::_('MOD_WOWBOSS_DRAENOR_BLACKROCK_FOUNDRY'),
        $params->get('foundry'),
        // Boss List ("id","name","show/hide","status")
        array(
            new Boss( "oregorger" , JText::_('MOD_WOWBOSS_DRAENOR_OREGORGER') , $params->get('oregorger'), $params->get('oregorgerlink') ),
            new Boss( "gruul" , JText::_('MOD_WOWBOSS_DRAENOR_GRUUL') , $params->get('gruul'), $params->get('gruullink')  ),
            new Boss( "furnace" , JText::_('MOD_WOWBOSS_DRAENOR_FURNACE') , $params->get('furnace'), $params->get('furnacelink')  ),
            new Boss( "hansgar" , JText::_('MOD_WOWBOSS_DRAENOR_HANSGAR') , $params->get('hansgar'), $params->get('hansgarlink') ),
            new Boss( "kagraz" , JText::_('MOD_WOWBOSS_DRAENOR_KAGRAZ') , $params->get('kagraz'), $params->get('kagrazlink') ),
            new Boss( "kromog" , JText::_('MOD_WOWBOSS_DRAENOR_KROMOG') , $params->get('kromog'), $params->get('kromoglink')  ),
            new Boss( "darmac" , JText::_('MOD_WOWBOSS_DRAENOR_DARMAC') , $params->get('darmac'), $params->get('darmaclink')  ),
            new Boss( "thogar" , JText::_('MOD_WOWBOSS_DRAENOR_THOGAR') , $params->get('thogar'), $params->get('thogarlink') ),
            new Boss( "maidens" , JText::_('MOD_WOWBOSS_DRAENOR_MAIDENS') , $params->get('maidens'), $params->get('maidenslink')  ),
            new Boss( "blackhand" , JText::_('MOD_WOWBOSS_DRAENOR_BLACKHAND') , $params->get('blackhand'), $params->get('blackhandlink') ),
        ),
        $params->get('foundry-expview')
    ),
    // Hellfire Citadel
    $raid3 = new Raid(
        "hellfirecitadel",
        JText::_('MOD_WOWBOSS_DRAENOR_HELLFIRE_CITADEL'),
        $params->get('hellfirecitadel'),
        // Boss List ("id","name","show/hide","status")
        array(
            new Boss( "ironreaver" , JText::_('MOD_WOWBOSS_DRAENOR_IRONREAVER') , $params->get('ironreaver'), $params->get('ironreaverlink') ),
			new Boss( "hellfireassault" , JText::_('MOD_WOWBOSS_DRAENOR_HELLFIREASSAULT') , $params->get('hellfireassault'), $params->get('hellfireassaultlink')  ),
            new Boss( "kormrok" , JText::_('MOD_WOWBOSS_DRAENOR_KORMROK') , $params->get('kormrok'), $params->get('kormroklink')  ),
            new Boss( "gorefiend" , JText::_('MOD_WOWBOSS_DRAENOR_GOREFIEND') , $params->get('gorefiend'), $params->get('gorefiendlink') ),
            new Boss( "hellfirehighcouncil" , JText::_('MOD_WOWBOSS_DRAENOR_HELLFIREHIGHCOUNCIL') , $params->get('hellfirehighcouncil'), $params->get('hellfirehighcouncillink') ),
            new Boss( "kilroggdeadeye" , JText::_('MOD_WOWBOSS_DRAENOR_KILROGGDEADEYE') , $params->get('kilroggdeadeye'), $params->get('kilroggdeadeyelink')  ),
            new Boss( "shadowlordiskar" , JText::_('MOD_WOWBOSS_DRAENOR_SHADOWLORDISKAR') , $params->get('shadowlordiskar'), $params->get('shadowlordiskarlink')  ),
            new Boss( "socrethartheeternal" , JText::_('MOD_WOWBOSS_DRAENOR_SOCRETHARTHEETERNAL') , $params->get('socrethartheeternal'), $params->get('socrethartheeternallink') ),
            new Boss( "tyrantvelhari" , JText::_('MOD_WOWBOSS_DRAENOR_TYRANTVELHARI') , $params->get('tyrantvelhari'), $params->get('tyrantvelharilink')  ),
            new Boss( "fellordzakuun" , JText::_('MOD_WOWBOSS_DRAENOR_FELLORDZAKUUN') , $params->get('fellordzakuun'), $params->get('fellordzakuunlink') ),
            new Boss( "xhulhorac" , JText::_('MOD_WOWBOSS_DRAENOR_XHULHORAC') , $params->get('xhulhorac'), $params->get('xhulhoraclink') ),
            new Boss( "mannoroth" , JText::_('MOD_WOWBOSS_DRAENOR_MANNOROTH') , $params->get('mannoroth'), $params->get('mannorothlink') ),
            new Boss( "archimonde" , JText::_('MOD_WOWBOSS_DRAENOR_ARCHIMONDE') , $params->get('archimonde'), $params->get('archimondelink') ),
        ),
        $params->get('hellfirecitadel-expview')
    )	

);


echo "<div id='wowboss-draenor'>"; // Module Container

    foreach($raids as $raid): // Start loop for each raid

        // Define variable for boss list for current raid.
        $bosses = $raid->bosslist; 

        // Setting path for raid image.
        $module_media_url = JURI::base() . "media/" . $module->module . "/img/"; 
        $raid->img = $module_media_url . "raids/" . $raid->img;
        $raid->imggrey = $module_media_url . "raids/" . $raid->imggrey;

        


        // Boss Count
        $bosscount = count($bosses);

        $bosscountdefeated = 0;
        $bosscountnormal = 0;
        $bosscountheroic = 0;
        $bosscountmythic = 0;

        foreach($bosses as $boss){
            
            
            // Setting path for boss image.
            $boss->bossimg = $module_media_url . $raid->id . "/" . $boss->bossimg;
            $boss->bossimggrey = $module_media_url . $raid->id . "/" . $boss->bossimggrey;
            
            
            if($boss->status == "undefeated") {       
                $boss->bossimg = $boss->bossimggrey;
            } 
            

            // Defeated Boss Count
            if($boss->status != "undefeated") {       
                $bosscountdefeated++;   
            } 

            // Defeated Normal Boss Count
            if($boss->status == "normal") {
                $bosscountnormal++; 
            } 

            // Defeated Heroic Boss Count
            if($boss->status == "heroic") {
                $bosscountheroic++; 
            } 

            // Defeated Mythic Boss Count
            if($boss->status == "mythic") {
                $bosscountmythic++; 
            }
            
            
            
            


        } 

        // Getting % for each difficulty
        $defeatedrate = round($bosscountdefeated / $bosscount * 100, 2);

        $mythicrate = round($bosscountmythic / $bosscount * 100, 2);
        $heroicrate = round($bosscountheroic / $bosscount * 100, 2) + $mythicrate;
        $normalrate = round($bosscountnormal / $bosscount * 100, 2) + $heroicrate;


        

        // Checking expanded view
        if ($raid->expview == "yes") {       
            $raid->expviewclass = "toggled";
        } 



        // Check if raid is set to "show".
        if($raid->show == "show"){


            // Calling layout file
            require( JModuleHelper::getLayoutPath('mod_wowboss_draenor'));


        }


    endforeach; // End loop for each raid

echo "</div>";

?>