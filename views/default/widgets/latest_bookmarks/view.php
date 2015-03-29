<?php 
  
  $num_items = $vars['entity']->num_items;
  set_context('search');
  $widgtet_datas = list_entities('object','bookmarks',0,$num_items,false, false, false);
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
