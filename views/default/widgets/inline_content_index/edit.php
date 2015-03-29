<?php 
	$widget_title = $vars['entity']->widget_title;
	$html_content = $vars['entity']->html_content;
	
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
<?php echo elgg_echo('custom_index_widgets:html_content'); ?>	
<?php
	echo elgg_view('input/longtext', array(
			'internalname' => 'params[html_content]',                        
			'value' => $html_content
		));
	?>
</p>