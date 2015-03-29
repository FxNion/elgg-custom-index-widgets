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
<p><?php echo elgg_echo('custom_index_widgets:supported_media_formats'); ?></p>
<table>
        <tbody><tr><th><b>Player<b></th><th><b>File Formats<b></th></tr>
        <tr><td style="width: 100px">Quicktime</td><td>aif, aiff, aac, au, bmp, gsm, mov, mid, midi, mpg, mpeg, mp4, m4a, psd, qt, qtif, qif, qti, snd, tif, tiff, wav, 3g2, 3pg</td></tr>
        <tr><td>Flash</td><td>flv, mp3, swf</td></tr>
        <tr><td>Windows Media Player</td><td>asx, asf, avi, wma, wmv</td></tr>
        <tr><td>Real Player</td><td>ra, ram, rm, rpm, rv, smi, smil</td></tr>
        <tr><td>Silverlight</td><td>xaml</td></tr>
        <tr><td>iframe</td><td>html, pdf</td></tr>
        </tbody>
</table>        
