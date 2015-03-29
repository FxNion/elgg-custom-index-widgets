  <?php
	$num_items = $vars['entity']->num_items;
	if (!isset($num_items)) $num_items = 10;
	
	$widget_group = $vars["entity"]->widget_group;
  	if (!isset($widget_group)) $widget_group = 0;
	
	$metadata_name = $vars['entity']->metadata_name;
	if (!isset($metadata_name)) $metadata_name = "";

	$threshold = $vars['entity']->threshold;
	if (!isset($threshold)) $threshold = 1;
	
	$widget_title = $vars['entity']->widget_title;
	$widget_group = $vars["entity"]->widget_group;
	$widget_subtype = $vars["entity"]->widget_subtype;
  ?>
  <p>
      <?php echo elgg_echo('custom_index_widgets:widget_title'); ?>
      :
      <?php
      echo elgg_view('input/text', array('internalname'=>'params[widget_title]', 'value'=>$widget_title));
      ?>
  </p>
  <p>
      <?php echo elgg_echo('custom_index_widgets:widget_subtype'); ?>
      : 
      <?php

	  $subtypes = get_data("SELECT subtype from {$CONFIG->dbprefix}entity_subtypes");
      $subtype_list = array();
	  $subtype_list['All'] = '';
	  $subtype_list['user'] = 'user';
	  $subtype_list['group'] = 'group';
	  
      if ($subtypes) {
          foreach ($subtypes as $data) {
              $subtype_list[$data->subtype] = $data->subtype;
          }
      }
      echo elgg_view('input/pulldown', array('internalname'=>'params[widget_subtype]', 'options_values'=>$subtype_list, 'value'=>$widget_subtype));
      ?>
  </p>
  <p>
      <?php echo elgg_echo('group'); ?>
      : 
      <?php
      $groups = get_entities('group', '', 0, '', 100, 0, false, 0, null);
      $group_list = array();
      $group_list[0] = elgg_echo('custom_index_widgets:widget_all_groups');
      if ($groups) {
          foreach ($groups as $group) {
              $group_list[$group->getGUID()] = $group->name;
          }
      }
      echo elgg_view('input/pulldown', array('internalname'=>'params[widget_group]', 'options_values'=>$group_list, 'value'=>$widget_group));
      ?>
  </p>
  <p>
      <?php echo elgg_echo('custom_index_widgets:threshold'); ?>
      :
      <?php
      echo elgg_view('input/pulldown', array('internalname'=>'params[threshold]', 'options_values'=>array('1'=>'1', '3'=>'3', '5'=>'5', '8'=>'8', '10'=>'10', '12'=>'12', '15'=>'15', '20'=>'20', '30'=>'30', '40'=>'40', '50'=>'50', '100'=>'100', ), 'value'=>$thresholds));
      ?>
  </p>
  <p>
      <?php echo elgg_echo('custom_index_widgets:num_items'); ?>
      :
      <?php
      echo elgg_view('input/pulldown', array('internalname'=>'params[num_items]', 'options_values'=>array('1'=>'1', '3'=>'3', '5'=>'5', '8'=>'8', '10'=>'10', '12'=>'12', '15'=>'15', '20'=>'20', '30'=>'30', '40'=>'40', '50'=>'50', '100'=>'100', ), 'value'=>$num_items));
      ?>
  </p>
  <p>
      <?php echo elgg_echo('custom_index_widgets:metadata_name'); ?>
      :
      <?php
      echo elgg_view('input/text', array('internalname'=>'params[metadata_name]', 'value'=>$metadata_name));
      ?>
  </p>
