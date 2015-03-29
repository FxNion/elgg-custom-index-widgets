<?php
	 
?>
<div>
  <div class="contentWrapper">
    <table>
      <tr>
  	     <td style="width:40%"><?php echo elgg_echo("custom_index_widgets:layout"); ?></td>
  	     <td>
  	         <?php	echo elgg_view('input/pulldown', array(
          			'internalname' => 'params[ciw_layout]',
          			'options_values' => array(
          				'index_2rmsb' => elgg_echo('custom_index_widgets:index_2rmsb'),
          				'index_2rsmb' => elgg_echo('custom_index_widgets:index_2rsmb'),
          				'index_2rhhb' => elgg_echo('custom_index_widgets:index_2rhhb'),
          				'index_1rsss' => elgg_echo('custom_index_widgets:index_1rsss'),
          				'index_1rsms' => elgg_echo('custom_index_widgets:index_1rsms')
          			),
          			'value' => $vars["entity"]->ciw_layout
          		));
          	?>
         </td>
      </tr>
	  
      </table>
    </div>
</div>
