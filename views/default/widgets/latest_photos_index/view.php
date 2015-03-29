<?php 
	$num_items = $vars['entity']->num_items;
	
?>
<div class="index_box">
      <div class="contentWrapper">
      <?php 
          echo '<div class="tidypics_widget_latest">';
	        echo tp_get_latest_photos($num_items, 0);
	        echo '</div>';
      ?>
    <div class="clearfloat"></div>
    </div>
  </div>
