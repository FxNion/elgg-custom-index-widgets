<?php 
	$widget_title = $vars['entity']->widget_title;
	$widget_video_width = $vars['entity']->widget_video_width;
	$widget_video_height = $vars['entity']->widget_video_height;
	$widget_video_url = $vars['entity']->widget_video_url;
	$widget_video_title = $vars['entity']->widget_video_title;
	
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
<?php echo elgg_echo('custom_index_widgets:widget_video_caption'); ?>	
<?php
	echo elgg_view('input/text', array(
			'internalname' => 'params[widget_video_caption]',                        
			'value' => $widget_video_caption
		));
	?>
</p>
<p>
<?php echo elgg_echo('custom_index_widgets:widget_video_url'); ?>	
<?php
	echo elgg_view('input/text', array(
			'internalname' => 'params[widget_video_url]',                        
			'value' => $widget_video_url
		));
	?>
</p>
<p>
<?php echo elgg_echo('custom_index_widgets:widget_video_width'); ?>	
<?php
	echo elgg_view('input/text', array(
			'internalname' => 'params[widget_video_width]',                        
			'value' => $widget_video_width
		));
	?>
</p>
<p>
<?php echo elgg_echo('custom_index_widgets:widget_video_height'); ?>	
<?php
	echo elgg_view('input/text', array(
			'internalname' => 'params[widget_video_height]',                        
			'value' => $widget_video_height
		));
	?>
</p>

