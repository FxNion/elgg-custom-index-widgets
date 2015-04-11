<?php 
  
  $num_items = $vars['entity']->num_items;
  if (!isset($num_items)) $num_items = 10;
  $display_avatar = $vars['entity']->display_avatar;
  if (!isset($display_avatar)) $display_avatar = 'yes';
  
  $widgtet_datas = elgg_get_entities_from_metadata(array('metadata_names' => 'icontime', 'types' => 'user', 'limit' => $num_items));
  
?>        
<div class="contentWrapper">
  <div style="text-align: center">
  <?php 
      if(isset($widgtet_datas)) {
          
          foreach($widgtet_datas as $members){
			if ($display_avatar == 'yes'){
              echo "<div class=\"icon_members\">";
              echo elgg_view("profile/icon",array('entity' => $members, 'size' => 'small'));
              echo "</div>";
			}else{
			  echo "<a href=\"" . $members->getUrl() . "\" rel=\"$rel\">" . $members->name . "</a>&nbsp;";
			}
          }
      }
  ?>
  </div>
	<div class="clearfloat"> </div>
</div>

