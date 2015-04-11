<?php
	/**
	 * Elgg widget layout
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @author Curverider Ltd
	 * @link http://elgg.org/
	 */
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
		
		if (is_array($widgettypes) && sizeof($widgettypes) > 0 /*&& $owner && $owner->canEdit()*/) {
			
?>
<script type="text/javascript">
$(document).ready(function () {
	$('div#customise_editpanel').slideToggle("fast");
});
</script>
<div id="customise_editpanel" style="visibility:visible;">
  <div id="customise_editpanel_rhs">
    <h2>
      <?php echo elgg_echo("widgets:gallery"); ?></h2>
    <div id="widget_picker_gallery">  
<?php
	foreach($widgettypes as $handler => $widget) {
	   if (in_array("custom_index_widgets",$widget->context) || $handler == "feed_reader"){
      ?>
      <table class="draggable_widget" cellspacing="0">
        <tr>
          <td>
            <h3>
              <?php echo $widget->name; ?>
              <input type="hidden" name="multiple" value="<?php if ((isset($widget-> handler)) && (isset($widgettypes[$widget->handler]->multiple))) echo $widgettypes[$widget->handler]->multiple; ?>" />
              <input type="hidden" name="side" value="<?php if ((isset($widget-> handler)) && (isset($widgettypes[$widget->handler])) && (is_array($widgettypes[$widget->handler]->positions))) echo in_array('side',$widgettypes[$widget->handler]->positions); ?>" />
              <input type="hidden" name="main" value="<?php if ((isset($widget-> handler)) && (isset($widgettypes[$widget->handler])) && (is_array($widgettypes[$widget->handler]->positions))) echo in_array('main',$widgettypes[$widget->handler]->positions); ?>" />
              <input type="hidden" name="handler" value="<?php echo htmlentities($handler, ENT_QUOTES, 'UTF-8'); ?>" />
              <input type="hidden" name="description" value="<?php echo htmlentities($widget-> description, ENT_QUOTES, 'UTF-8'); ?>" />
              <input type="hidden" name="guid" value="0" /></h3></td>
          <td width="17px" align="right"></td>
          <td width="17px" align="right">
            <a href="#">
              <img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" width="14px" height="14px" class="more_info" /></a></td>
          <td width="17px" align="right">
            <a href="#">
              <img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" width="15px" height="15px" class="drag_handle" /></a></td>
        </tr>
      </table>
      <?php
	}
?> 
<?php
	}
?>    <br />
      <!-- bit of space at the bottom of the widget gallery -->
    </div>
    <!-- /#customise_editpanel_rhs -->
  </div>
  <!-- /#widget_picker_gallery -->
  <div class="customise_editpanel_instructions">
    <h2>
      <?php echo elgg_echo('widgets:add'); ?></h2>
    <?php echo elgg_view('output/longtext', array('value' => elgg_echo('widgets:add:description'))); ?>
  </div>
  <?php
  $leftcolumn_widgets_view = array();
  $leftcolumn_widgets="";
  $area_widget_list = $area1widgets;
  
	if (is_array($area_widget_list) && sizeof($area_widget_list) > 0) {
		foreach($area_widget_list as $widget) {
			if (!empty($leftcolumn_widgets)) {
				$leftcolumn_widgets .= "::";
			}
			$leftcolumn_widgets .= "{$widget->handler}::{$widget->getGUID()}";
			$leftcolumn_widgets_view[] =elgg_view("custom_index_widgets/draggable_widget_area", array('columnwidget_size' => 149, 'widgettypes'=>$widgettypes, 'widget' => $widget) );
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
			$middlecolumn_widgets_view[] =elgg_view("custom_index_widgets/draggable_widget_area", array('columnwidget_size' => 149, 'widgettypes'=>$widgettypes, 'widget' => $widget) );
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
			$rightcolumn_widgets_view[] =elgg_view("custom_index_widgets/draggable_widget_area", array('columnwidget_size' => 149, 'widgettypes'=>$widgettypes, 'widget' => $widget) );
		}
	}

  $ciw_layout = get_plugin_setting("ciw_layout", "custom_index_widgets");
  ?>
  <div id="customise_page_view">
  <?php
    echo elgg_view("custom_index_widgets/$ciw_layout", array('area1' => $leftcolumn_widgets_view, 'area2' => $middlecolumn_widgets_view,'area3' => $rightcolumn_widgets_view , 'layoutmode' => 'edit_mode') ); 
  ?>
  </div>
  <form action="<?php echo $vars['url']; ?>action/widgets/reorder" method="post" style="display: inline">
	<?php echo elgg_view('input/securitytoken') ?>
    <input type="hidden" style="display:none" name="debugField1" id="debugField1" value="<?php echo $leftcolumn_widgets; ?>"/>
    <input type="hidden" style="display:none" name="debugField2" id="debugField2"  value="<?php echo $middlecolumn_widgets; ?>"/>
    <input type="hidden" style="display:none" name="debugField3" id="debugField3"  value="<?php echo $rightcolumn_widgets; ?>"/>
    <input type="hidden" name="context" value="<?php echo get_context(); ?>" />
    <input type="hidden" name="owner" value="<?php echo $page_owner; ?>" />
    <input type="submit" value="<?php echo elgg_echo('save'); ?>" class="submit_button" onclick="$('a.toggle_customise_edit_panel').click();" />
    <input type="button" value="<?php echo elgg_echo('cancel'); ?>" class="cancel_button" onclick="$('a.toggle_customise_edit_panel').click();" />
  </form>
  &nbsp;
  <form action="<?php echo $vars['url']; ?>action/custom_index_widgets/reset" method="post" style="display: inline">
  	<?php echo elgg_view('input/securitytoken') ?>
    <input type="hidden" style="display:none" name="debugField1" id="debugField1" value="<?php echo $leftcolumn_widgets; ?>"/>
    <input type="hidden" style="display:none" name="debugField2" id="debugField2"  value="<?php echo $middlecolumn_widgets; ?>"/>
    <input type="hidden" style="display:none" name="debugField3" id="debugField3"  value="<?php echo $rightcolumn_widgets; ?>"/>
    <input type="hidden" name="context" value="<?php echo get_context(); ?>" />
    <input type="hidden" name="owner" value="<?php echo $page_owner; ?>" />
   	<input type="submit" value="<?php echo elgg_echo('custom_index_widgets:reset'); ?>" class="cancel_button"  />
  </form>
</div>

<?php
			
		}
		
?>

<?php
  echo elgg_view("custom_index_widgets/$ciw_layout", array('area1' => $area1widgets,'area2' => $area2widgets,'area3' => $area3widgets, 'layoutmode' => 'index_mode') );
?>
