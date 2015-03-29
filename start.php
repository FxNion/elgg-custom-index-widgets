<?php

	/**
	 * Elgg custom index page
	 * 
	 * @package ElggIndexCustom
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider <info@elgg.com>
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.com/
	 */

	 
    function indexCustomWidgets_init() {
	
        // Extend system CSS with our own styles
			  extend_view('css','custom_index_widgets/css',10000);
				
    		register_page_handler ( 'custom_index_widgets', 'custom_index_widgets_page_handler' );		
           // Replace the default index page
    		register_plugin_hook('index','system','custom_index_widgets');
    		
    		$ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
    		
    		if ($ciw_layout == NULL)
    			 set_plugin_setting("ciw_layout", "index_2rmsb", "custom_index_widgets");
    			 
    		add_widget_type('latest_members',elgg_echo ('custom_index_widgets:members'),elgg_echo ('custom_index_widgets:members'), "custom_index_widgets");
        
        if(is_plugin_enabled('groups'))	
          add_widget_type('latest_groups',elgg_echo ('custom_index_widgets:groups'),elgg_echo ('custom_index_widgets:groups'), "custom_index_widgets");
         
        if(is_plugin_enabled('file'))   	
          add_widget_type('latest_files',elgg_echo ('custom_index_widgets:files'),elgg_echo ('custom_index_widgets:files'), "custom_index_widgets");
        
        if(is_plugin_enabled('news'))
          add_widget_type('latest_news',elgg_echo ('custom_index_widgets:news'),elgg_echo ('custom_index_widgets:news'), "custom_index_widgets");
        
        if(is_plugin_enabled('bookmarks'))
          add_widget_type('latest_bookmarks',elgg_echo ('custom_index_widgets:bookmarks'),elgg_echo ('custom_index_widgets:bookmarks'), "custom_index_widgets");
        
        if(is_plugin_enabled('blog'))
          add_widget_type('latest_blogs',elgg_echo ('custom_index_widgets:blogs'),elgg_echo ('custom_index_widgets:blogs'), "custom_index_widgets");
        
        if(is_plugin_enabled('pages'))
          add_widget_type('latest_pages',elgg_echo ('custom_index_widgets:pages'),elgg_echo ('custom_index_widgets:pages'), "custom_index_widgets");
        
	     if(is_plugin_enabled('event_calendar'))
          add_widget_type('latest_events',elgg_echo ('custom_index_widgets:latest_events'),elgg_echo ('custom_index_widgets:latest_events'), "custom_index_widgets");

       if(is_plugin_enabled('tidypics')){ 
		      add_widget_type('latest_photos_index', elgg_echo("tidypics:widget:latest"), elgg_echo("tidypics:widget:latest_descr"), 'custom_index_widgets');
		      add_widget_type('latest_album_index', elgg_echo("tidypics:widget:albums"), elgg_echo("tidypics:widget:latest_descr"), 'custom_index_widgets');
		   }
    }
    
    function custom_index_widgets() {
			
			if (!@include_once(dirname(__FILE__) . "/index.php")) return false;
			return true;
			
		}


	function custom_index_widgets_page_handler($page) {
	global $CONFIG;
		
		if (isset ( $page [0] )) {
			
			switch ($page [0]) {
				case "edit" :
					@include (dirname ( __FILE__ ) . "/edit.php");
					break;
			}
		} else {
			register_error ( elgg_echo ( "custom_index_widgets:admin:notfound" ) );
			forward ( $CONFIG->wwwroot );
		}
		return true;
	}
		    
	function custom_index_widgets_pagesetup()
	{
		global $CONFIG;
		if (get_context() == 'admin' && isadminloggedin()) {
			add_submenu_item(elgg_echo('custom_index_widgets:index'), $CONFIG->wwwroot . 'pg/custom_index_widgets/edit');
		}
	}
	
  // Add the plugin�s init function to the system�s init event
  register_elgg_event_handler('init','system','indexCustomWidgets_init');
  register_elgg_event_handler('pagesetup','system','custom_index_widgets_pagesetup');  
  
?>
