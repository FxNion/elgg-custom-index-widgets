<?php 
  
  $num_items = $vars['entity']->num_items;
  if (!isset($num_items)) $num_items = 10;
  set_context('search');
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
