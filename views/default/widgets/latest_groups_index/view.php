<?php
 
  $num_items = $vars['entity']->num_items;
  if (!isset($num_items)) $num_items = 10;
 
  $widget_context_mode = $vars['entity']->widget_context_mode;
  if (!isset($widget_context_mode)) $widget_context_mode = 'search';
  set_context($widget_context_mode);
 
  $widgtet_datas = list_entities('group','',0,$num_items,false, false, false);
?>       
<div class="contentWrapper">
  <?php
      if(isset($widgtet_datas)) {
          echo $widgtet_datas;
      }
  ?>
  <div class="clearfloat"></div>
</div>
