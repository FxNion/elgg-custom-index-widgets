<?php

$maintype = "object";
$subtype = $vars["entity"]->widget_subtype;

if ($subtype == 'user') {$maintype='user'; $subtype='';}
if ($subtype == 'group') {$maintype='group'; $subtype='';}

$num_items = $vars['entity']->num_items;
if (!isset($num_items))
    $num_items = 20;
	
$metadata_name = $vars['entity']->metadata_name;
if (!isset($metadata_name))
    $metadata_name = "";

$threshold = $vars['entity']->threshold;
if (!isset($threshold))
    $threshold = 1;
	
$widget_group = $vars["entity"]->widget_group;
if (!isset($widget_group))
    $widget_group = "";


?>
<div class="contentWrapper">
    <?php
		echo display_tagcloud($threshold, $num_items, $metadata_name, $maintype, $subtype, $widget_group , -1);
    ?>
    <div class="clearfloat">
    </div>
</div>
