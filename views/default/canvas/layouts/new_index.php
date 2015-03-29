<?php

		set_context('custom_index_widgets');
		//set_page_owner(get_loggedin_userid());
		set_page_owner(2);
		
		$page_owner = page_owner();
		$widgettypes = get_widget_types();
		$owner = page_owner_entity();
		
		$area1widgets = get_widgets($page_owner,get_context(),1);
		$area2widgets = get_widgets($page_owner,get_context(),2);
		$area3widgets = get_widgets($page_owner,get_context(),3);
		if (empty($area1widgets) && empty($area2widgets) && empty($area3widgets)) {
			
			if (isset($vars['area3'])) $vars['area1'] = $vars['area3'];
			if (isset($vars['area4'])) $vars['area2'] = $vars['area4'];
			
		}
		$ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
    echo elgg_view("custom_index_widgets/$ciw_layout", array('area1' => $area1widgets,'area2' => $area2widgets,'area3' => $area3widgets, 'layoutmode' => 'index_mode') );
?>
