  <?php
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	
	$widget_group = $vars["entity"]->widget_group;
  	if (!isset($widget_group)) $widget_group = 0;
	
  	$site_categories = $vars['config']->site->categories;
  	$widget_categorie = $vars['entity']->widget_categorie;
	$widget_context_mode = $vars['entity']->widget_context_mode;
	$widget_title = $vars['entity']->widget_title;
	$widget_group = $vars["entity"]->widget_group;
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
  <?php echo elgg_echo('custom_index_widgets:num_items'); ?>:
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


  <?php if($site_categories != NULL){ ?>
  <p>
  <?php echo elgg_echo('categories'); ?>:  
  <?php
  $categories_with_empty_choice  = array_merge(array('-1'=>''), array_combine($site_categories,$site_categories));
  echo elgg_view('input/pulldown', array(
			'internalname' => 'params[widget_categorie]',
			'options_values' => $categories_with_empty_choice,
			'value' => $widget_categorie
		));
	?>
  </p>
  <?php } ?>
  <p>
  <?php echo elgg_echo('custom_index_widgets:context_mode'); ?>:  
  <?php
	  echo elgg_view('input/pulldown', array(
				'internalname' => 'params[widget_context_mode]',
				'options_values' => array('search'=>elgg_echo('custom_index_widgets:context_list'), 'detail'=>elgg_echo('custom_index_widgets:context_detail')),
				'value' => widget_context_mode
			));
	?>
  </p>

