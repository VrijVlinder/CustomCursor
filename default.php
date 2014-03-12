<?php if (!defined('APPLICATION')) exit();


// Define the plugin:


$PluginInfo['CustomCursor'] = array(
   'Name'=>'CustomCursor',
   'Description' => "This plugin adds a custom cursor.",
   'Version' => '1.1',
   'MobileFriendly'=>TRUE,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => "http://www.vrijvlinder.com"
);

class CustomCursor_Plugin extends Gdn_Plugin {

  public function __construct() {
      
   }

  
  

	
   public function Setup() {
		
   }


public function Base_Render_Before($Sender) {

$Sender->AddCssFile('plugins/CustomCursor/design/cc.css');
}


           















     public function OnDisable() {
      return TRUE;
   }

}


	
        	   
