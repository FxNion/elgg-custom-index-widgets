<?php 
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	
?>

<div class="contentWrapper">
  <?php 
      echo '<div class="tidypics_widget_latest">';
        echo tp_get_latest_photos($num_items, 0);
        echo '</div>';
  ?>
<div class="clearfloat"></div>
</div>

