<?php 
  
  $num_items = $vars['entity']->num_items;
  if (!isset($num_items)) $num_items = 10;
  $object_type ='page_top';
  set_context('search');
  
  $site_categories = $vars['config']->site->categories;
  $widget_categorie = $vars['entity']->widget_categorie;
  
  if ( $site_categories ==NULL || $widget_categorie==NULL ){
    $widgtet_datas = list_entities('object',$object_type,0,$num_items,false, false, false);
  }else{
  	 $widgtet_datas = list_entities_from_metadata('universal_categories', $widget_categorie, 'object', $object_type, 0, $num_items, false, false);
  }
?>        

<div class="contentWrapper">
  <?php 
      if(isset($widgtet_datas)) {
          echo $widgtet_datas;
      }
  ?>
  <div class="clearfloat"></div>
</div>