<?php 
  
  $num_items = $vars['entity']->num_items;
  $widgtet_datas = get_entities_from_metadata('icontime', '', 'user', '', 0, $num_items);
?>        
  <div class="index_box">
      <div class="contentWrapper">
      <?php 
          if(isset($widgtet_datas)) {
              //display member avatars
              foreach($widgtet_datas as $members){
                  echo "<div class=\"index_members\">";
                  echo elgg_view("profile/icon",array('entity' => $members, 'size' => 'small'));
                  echo "</div>";
              }
          }
      ?>
    <div class="clearfloat"></div>
    </div>
  </div>
