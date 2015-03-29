  <?php
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	
  $site_categories = $vars['config']->site->categories;
  $widget_categorie = $vars['entity']->widget_categorie;

  ?>

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
			                           '50' => '50',
			                           '100' => '100',
			                         ),
			'value' => $num_items
		));
	?>
  </p>

  <?php if($site_categories){ ?>
  <?php echo elgg_echo('categories'); ?>
  <p>  
  <?php
  $categories_with_empty_choice  = array_merge(array(''=>''), $site_categories);
  echo elgg_view('input/pulldown', array(
			'internalname' => 'params[widget_categorie]',
			'options_values' => $categories_with_empty_choice,
			'value' => $widget_categorie
		));
	?>
  </p>
  <?php } ?>