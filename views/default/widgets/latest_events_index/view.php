<?php 
	$object_type ='event_calendar';
  
  	$num_items = $vars['entity']->num_items;
  	if (!isset($num_items)) $num_items = 10;
  
  	$widget_group = $vars["entity"]->widget_group;
  	if (!isset($widget_group)) $widget_group = 0;
  
	$widgtet_datas = list_entities('object',$object_type,152,$num_items,false, false, false);
?>
<div class="contentWrapper">
  <?php 
      if(isset($widgtet_datas)) {
          echo $widgtet_datas;
      }
  ?>
  <div class="clearfloat"></div>
</div>
