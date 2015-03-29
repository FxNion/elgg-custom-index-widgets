<?php 
	$num_items = $vars['entity']->num_items;
	$widgtet_datas = list_entities('object','event_calendar',0,$num_items,false, false, false);
?>
<div class="index_box">
      <div class="contentWrapper">
      <?php 
          if(isset($widgtet_datas)) {
              echo $widgtet_datas;
          }
      ?>
    <div class="clearfloat"></div>
    </div>
  </div>
