<?php
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	
	$display_avatar = $vars['entity']->display_avatar;
	if (!isset($display_avatar)) $display_avatar = 'yes';
	
	$widget_title = $vars['entity']->widget_title;

?>
<p>
  <?php echo elgg_echo('custom_index_widgets:widget_title'); ?>:
  <?php
	echo elgg_view('input/text', array(
			'internalname' => 'params[widget_title]',                        
			'value' => $widget_title
		));
	?>
</p>
<p>
<?php echo elgg_echo('custom_index_widgets:num_items'); ?>
	
<?php
	echo elgg_view('input/pulldown', array(
			'internalname' => 'params[num_items]',
			'options_values' => array( '1' => '1',
									   '3' => '3',
                                 	   '5' => '5',
			                           '8' => '8',
			                           '10' => '10',
			                           '12' => '12',
			                           '15' => '15',
			                           '20' => '20',
			                           '30' => '30',
			                           '40' => '40',
			                           '54' => '54',
									   '60' => '60',
									   '78' => '78',
			                           '100' => '100',
			                         ),
			'value' => $num_items
		));
?>
</p>
<p>
<?php echo elgg_echo('custom_index_widgets:display_avatar'); ?>
	
<?php
	echo elgg_view('input/pulldown', array(
			'internalname' => 'params[display_avatar]',
			'options_values' => array( 'yes' => 'yes',
									   'no' => 'no',
                                 	   
			                         ),
			'value' => $display_avatar
		));
?>
</p>
