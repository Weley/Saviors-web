<?php

class modWoWBossHelper
{
    public static function settings( $params )
    {
        jimport('joomla.application.module.helper');
                
        // Loading CSS
        JHtml::stylesheet('mod_wowboss_draenor/mod_wowboss_draenor.css', array(), true);
        JHtml::stylesheet('mod_wowboss_draenor/mod_wowboss_draenor_custom.css', array(), true);
        
        $document = JFactory::getDocument();
           
    }
}



// Raid Class
class Raid {
    public $id;
    public $name;
    public $bosslist;
    public $show;
    public $img;
    public $imggrey;
    public $expview;
    public $expviewclass;

    public function __construct($id, $name, $show, $bosslist, $expview) {
        $this->id = $id;
        $this->name = $name;
        $this->show = $show;
        $this->bosslist = $bosslist;   
        $this->img = $id . ".jpg";
        $this->imggrey = $id . "-grey.jpg";
        $this->expview = $expview;
    }


}
	
// Boss class
class Boss {
    public $id;
    public $name;
    public $status;
    public $statuslabel;
    public $bossimg;
    public $bossimggrey;
    public $bosslink;
    public $bosslinkopen;
    public $bosslinkclose;

    public function __construct($id, $name, $status, $bosslink) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->bossimg = $id . ".jpg";
        $this->bossimggrey = $id . "-grey.jpg";
        $this->bosslink = $bosslink;
        
        switch($status) {
        
            case "undefeated":
                $this->statuslabel = JText::_('MOD_WOWBOSS_DRAENOR_UNDEFEATED');
                break;
            case "normal":
                $this->statuslabel = JText::_('MOD_WOWBOSS_DRAENOR_NORMAL');
                break;
            case "heroic":
                $this->statuslabel = JText::_('MOD_WOWBOSS_DRAENOR_HEROIC');
                break;
            case "mythic":
                $this->statuslabel = JText::_('MOD_WOWBOSS_DRAENOR_MYTHIC');
                break;
        }
        
        // Defining opening link anchor
        if ( strlen($this->bosslink) > 0 ) {
            $this->bosslinkopen = "<a class='bosslink' href='" . $this->bosslink . "' title='" . $this->bosslink . "'>";
            $this->bosslinkclose = "</a>";
        } else {
            $this->bosslinkopen = "<div class='bosslink'>";
            $this->bosslinkclose = "</div>";
        }
        
        
    }
}

?>