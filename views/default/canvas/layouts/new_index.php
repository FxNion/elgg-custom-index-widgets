<?php

	/**
	 * Elgg top toolbar
	 * The standard elgg top toolbar
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 */
?>
<?php
	set_context('custom_index_widgets');
	set_page_owner(2);
	
	$widgettypes = get_widget_types();
	
	$page_owner = page_owner();
	$ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
	$ciw_showdashboard = get_plugin_setting("ciw_showdashboard", "custom_index_widgets");

	$area1widgets = get_widgets($page_owner,get_context(),1); 
	$area2widgets = get_widgets($page_owner,get_context(),2); 
	$area3widgets = get_widgets($page_owner,get_context(),3); 
	
	if (empty($area1widgets) && empty($area2widgets) && empty($area3widgets)) {
		
		if (isset($vars['area3'])) $vars['area1'] = $vars['area3'];
		if (isset($vars['area4'])) $vars['area2'] = $vars['area4'];
		
	}
		
		
	
	function buildColumnWidget($area_widget_list, $widgettypes, $build_server_side=TRUE){
		
		
		
		$column_widgets_view = array();
    	$column_widgets_string="";
		
		
		if (is_array($area_widget_list) && sizeof($area_widget_list) > 0) {
	  		foreach($area_widget_list as $widget) {
				if($build_server_side){
		  			
					$var_widget = new ElggWidget($widget->getGUID());
		  			$title = $var_widget->widget_title;
		  			if (!$title)
		  				$title = $widgettypes[$widget->handler]->name;
		  			if (!$title)
		  				$title = $widget->handler;
		  			$var_widget->title = $title;
		    		$column_widgets_view[] =elgg_view("custom_index_widgets/wrapper", array('entity'=>$var_widget));
					
	    		} else {
	    			
					if (!empty($column_widgets_string)) {
	  					$column_widgets_string .= "::";
	  				}
	  				$column_widgets_string .= "{$widget->handler}::{$widget->getGUID()}";
	    			
	    		}
	  		}
			
			if($build_server_side)
				return $column_widgets_view;
			else
				return $column_widgets_string;
		}
		return NULL;	
	}	
	
	$leftcolumn_widgets_view = buildColumnWidget($area1widgets,$widgettypes);
	$middlecolumn_widgets_view = buildColumnWidget($area2widgets,$widgettypes);
	$rightcolumn_widgets_view = buildColumnWidget($area3widgets,$widgettypes);
	
		
  	echo elgg_view("custom_index_widgets/$ciw_layout", array('area1' => $leftcolumn_widgets_view,'area2' => $middlecolumn_widgets_view,'area3' => $rightcolumn_widgets_view, 'layoutmode' => 'index_mode') );
  
  	if (isloggedin() && $ciw_showdashboard=="yes"){
    
    	set_context('dashboard');
    	$area1widgets = get_widgets($_SESSION['user']->getGUID(),get_context(),1);
		$area2widgets = get_widgets($_SESSION['user']->getGUID(),get_context(),2);
		$area3widgets = get_widgets($_SESSION['user']->getGUID(),get_context(),3);

		if (empty($area1widgets) && empty($area2widgets) && empty($area3widgets)) {
			
			if (isset($vars['area3'])) $vars['area1'] = $vars['area3'];
			if (isset($vars['area4'])) $vars['area2'] = $vars['area4'];
			
		}
		
		$leftcolumn_widgets_view = buildColumnWidget($area1widgets,$widgettypes);
		$middlecolumn_widgets_view = buildColumnWidget($area2widgets,$widgettypes);
		$rightcolumn_widgets_view = buildColumnWidget($area3widgets,$widgettypes);
		echo elgg_view("custom_index_widgets/index_1rsss", array('area1' => $leftcolumn_widgets_view,'area2' => $middlecolumn_widgets_view,'area3' => $rightcolumn_widgets_view, 'layoutmode' => 'index_mode') );
    }
?>
