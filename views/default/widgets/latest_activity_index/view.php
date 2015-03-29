<?php 
  
  $num_items = $vars['entity']->num_items;
  if (!isset($num_items)) $num_items = 10;
  
  $widget_group = $vars["entity"]->widget_group;
  if (!isset($widget_group)) $widget_group = 0;
 
  /* 
  $site_categories = $vars['config']->site->categories;
  $widget_categorie = $vars['entity']->widget_categorie;
  $widget_context_mode = $vars['entity']->widget_context_mode;
  if (!isset($widget_context_mode)) $widget_context_mode = 'search';
  set_context($widget_context_mode);
  */
  $widgtet_datas = elgg_view_river_items(0, $widget_group, '', '', '', '', $num_items,0,0,false);
  
?>        

<div class="contentWrapper">
  <?php 
      if(isset($widgtet_datas)) {
          echo $widgtet_datas;
      }
  ?>
  <div class="clearfloat"></div>
</div>
