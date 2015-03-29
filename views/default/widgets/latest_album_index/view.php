<?php 
	$num_items = $vars['entity']->num_items;
	
?>
<div class="index_box">
      <div class="contentWrapper">
      <?php 
          echo elgg_view('tidypics/albums', array('num_albums' => $num_items));
      ?>
    <div class="clearfloat"></div>
    </div>
  </div>
