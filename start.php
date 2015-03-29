<?php
	 
    function custom_index_widgets_init() {
	

		extend_view('css','custom_index_widgets/css');
		extend_view('metatags','custom_index_widgets/js');		
		
		$ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
		if ($ciw_layout == NULL)
			 set_plugin_setting("ciw_layout", "index_2rmsb", "custom_index_widgets");
			 
		$ciw_showdashboard = get_plugin_setting("ciw_showdashboard", "custom_index_widgets");
		if ($ciw_showdashboard == NULL)
			 set_plugin_setting("ciw_showdashboard", "yes", "custom_index_widgets");
    			 
    	  add_widget_type('latest_members_index',elgg_echo ('custom_index_widgets:latest_members_index'),elgg_echo ('custom_index_widgets:latest_members_index'), "custom_index_widgets", true);
		  add_widget_type('inline_content_index',elgg_echo ('custom_index_widgets:inline_content_index'),elgg_echo ('custom_index_widgets:inline_content_index'), "custom_index_widgets", true);
 		  add_widget_type('rich_media_index',elgg_echo ('custom_index_widgets:rich_media_index'),elgg_echo ('custom_index_widgets:rich_media_index'), "custom_index_widgets", true);
		  add_widget_type('latest_generic_index',elgg_echo ('custom_index_widgets:latest_generic_index'),elgg_echo ('custom_index_widgets:latest_generic_index'), "custom_index_widgets", true);
		  add_widget_type('latest_activity_index',elgg_echo ('custom_index_widgets:latest_activity_index'),elgg_echo ('custom_index_widgets:latest_activity_index'), "custom_index_widgets", true);
		  add_widget_type('cloud_generic_index',elgg_echo ('custom_index_widgets:cloud_generic_index'),elgg_echo ('custom_index_widgets:cloud_generic_index'), "custom_index_widgets", true);

        if(is_plugin_enabled('groups'))	
          add_widget_type('latest_groups_index',elgg_echo ('custom_index_widgets:latest_groups_index'),elgg_echo ('custom_index_widgets:latest_groups_index'), "custom_index_widgets", true);
         
        if(is_plugin_enabled('file'))   	
          add_widget_type('latest_files_index',elgg_echo ('custom_index_widgets:latest_files_index'),elgg_echo ('custom_index_widgets:latest_files_index'), "custom_index_widgets", true);
        
        if(is_plugin_enabled('news'))
          add_widget_type('latest_news_index',elgg_echo ('custom_index_widgets:latest_news_index'),elgg_echo ('custom_index_widgets:latest_news_index'), "custom_index_widgets",true);
        
        if(is_plugin_enabled('bookmarks_enhanced'))
          add_widget_type('latest_bookmarks_index',elgg_echo ('custom_index_widgets:latest_bookmarks_index'),elgg_echo ('custom_index_widgets:latest_bookmarks_index'), "custom_index_widgets",true);
        
        if(is_plugin_enabled('blog'))
          add_widget_type('latest_blogs_index',elgg_echo ('custom_index_widgets:latest_blogs_index'),elgg_echo ('custom_index_widgets:latest_blogs_index'), "custom_index_widgets",true);
        
        if(is_plugin_enabled('pages'))
          add_widget_type('latest_pages_index',elgg_echo ('custom_index_widgets:latest_pages_index'),elgg_echo ('custom_index_widgets:latest_pages_index'), "custom_index_widgets",true);
        
	    if(is_plugin_enabled('event_calendar'))
          add_widget_type('latest_events_index',elgg_echo ('custom_index_widgets:latest_events_index'),elgg_echo ('custom_index_widgets:latest_events_index'), "custom_index_widgets",true);

      	if(is_plugin_enabled('tidypics')){ 
		      add_widget_type('latest_photos_index', elgg_echo("tidypics:widget:latest"), elgg_echo("tidypics:widget:latest_descr"), "custom_index_widgets", true);
		      add_widget_type('latest_album_index', elgg_echo("tidypics:widget:albums"), elgg_echo("tidypics:widget:latest_descr"), "custom_index_widgets",true);
		}
		if(is_plugin_enabled('thewire'))
          add_widget_type('latest_wire_index',elgg_echo ('custom_index_widgets:latest_wire_index'),elgg_echo ('custom_index_widgets:latest_wire_index'), "custom_index_widgets",true);
		
		if(is_plugin_enabled('tasks'))
          add_widget_type('latest_tasks_index',elgg_echo ('custom_index_widgets:latest_tasks_index'),elgg_echo ('custom_index_widgets:latest_tasks_index'), "custom_index_widgets",true);
		  
		if(is_plugin_enabled('izap_videos')) 
          add_widget_type('latest_izap_videos_index',elgg_echo  ('custom_index_widgets:latest_izap_videos_index'),elgg_echo ('custom_index_widgets:latest_izap_videos_index'), "custom_index_widgets", true);
		  
		register_plugin_hook('index','system','custom_index_widgets');
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
	
  
  
  register_elgg_event_handler('init','system','custom_index_widgets_init');
  register_elgg_event_handler('pagesetup','system','custom_index_widgets_pagesetup');
   
  register_page_handler ( 'custom_index_widgets', 'custom_index_widgets_page_handler'); 
  register_action('custom_index_widgets/reset',false,$CONFIG->pluginspath . 'custom_index_widgets/actions/reset.php',true);

?>
