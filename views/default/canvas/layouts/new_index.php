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
	//set_page_owner(get_loggedin_userid());
	set_page_owner(2);
	
	/*foreach (array(1,2,3) as $column) {
        	if ($dbwidgets = get_widgets(2,'custom_index_widgets',$column)) {
        		
        		$dbguid = $dbwidget->getGUID();
                if (!$dbwidget->delete())
                    system_message($dbwidget->handler. " " .elgg_echo("failed deleted"));
				else
					system_message($dbwidget->handler. " " .elgg_echo("deleted"));
			}
		}
	*/
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
		
		
	$leftcolumn_widgets_view = array();
    $leftcolumn_widgets="";
    $area_widget_list = $area1widgets;
    
  	if (is_array($area_widget_list) && sizeof($area_widget_list) > 0) {
  		foreach($area_widget_list as $widget) {
  			if (!empty($leftcolumn_widgets)) {
  				$leftcolumn_widgets .= "::";
  			}
  			$leftcolumn_widgets .= "{$widget->handler}::{$widget->getGUID()}";
  			$var_widget = new ElggWidget($widget->getGUID());
			$title = $var_widget->widget_title;
			if (!$title)
				$title = $widgettypes[$widget->handler]->name;
			if (!$title)
				$title = $widget->handler;
			$var_widget->title = $title;
  			$leftcolumn_widgets_view[] =elgg_view("custom_index_widgets/wrapper", array('entity'=>$var_widget));
  		}
  	}
		
		
	$middlecolumn_widgets_view = array();
    $middlecolumn_widgets="";
    $area_widget_list = $area2widgets; 
    
  	if (is_array($area_widget_list) && sizeof($area_widget_list) > 0) {
  		foreach($area_widget_list as $widget) {
  			if (!empty($middlecolumn_widgets)) {
  				$middlecolumn_widgets .= "::";
  			}
  			$middlecolumn_widgets .= "{$widget->handler}::{$widget->getGUID()}";
  			$var_widget = new ElggWidget($widget->getGUID());
			$title = $var_widget->widget_title;
			if (!$title)
				$title = $widgettypes[$widget->handler]->name;
			if (!$title)
				$title = $widget->handler;
			$var_widget->title = $title;
  			$middlecolumn_widgets_view[] =elgg_view("custom_index_widgets/wrapper", array('entity'=>$var_widget));
  		}
  	}
  
    $rightcolumn_widgets_view = array();
    $rightcolumn_widgets ="";
    $area_widget_list = $area3widgets; 
    
  	if (is_array($area_widget_list) && sizeof($area_widget_list) > 0) {
  		foreach($area_widget_list as $widget) {
  			if (!empty($rightcolumn_widgets)) {
  				$rightcolumn_widgets .= "::";
  			}
  			$rightcolumn_widgets .= "{$widget->handler}::{$widget->getGUID()}";
  			$var_widget = new ElggWidget($widget->getGUID());
			$title = $var_widget->widget_title;
			if (!$title)
				$title = $widgettypes[$widget->handler]->name;
			if (!$title)
				$title = $widget->handler;
			$var_widget->title = $title;
  			$rightcolumn_widgets_view[] =elgg_view("custom_index_widgets/wrapper", array('entity'=>$var_widget));
  		}
  	}
		
		
	$ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
    echo elgg_view("custom_index_widgets/$ciw_layout", array('area1' => $leftcolumn_widgets_view,'area2' => $middlecolumn_widgets_view,'area3' => $rightcolumn_widgets_view, 'layoutmode' => 'index_mode') );
?>
