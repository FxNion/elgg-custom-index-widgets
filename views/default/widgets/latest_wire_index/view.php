<?php 
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	set_context('search');
 	$widgtet_datas = list_entities('object','thewire',0,$num_items,false, false, false);
?>

<div class="contentWrapper">
  <?php 
  	if (isloggedin()){
      if(isset($widgtet_datas)) {
          echo $widgtet_datas;
      }
	}
	else
		echo elgg_echo('custom_index_widgets:pleaselogin');
	 
  ?>
	<div class="clearfloat"></div>
</div>
