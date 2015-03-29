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
          				'index_2rbhh' => elgg_echo('custom_index_widgets:index_2rbhh'),
          				
          				'index_2rbsm' => elgg_echo('custom_index_widgets:index_2rbsm'),
          				'index_2rbms' => elgg_echo('custom_index_widgets:index_2rbms'),
          				
          				'index_1rsss' => elgg_echo('custom_index_widgets:index_1rsss')

          			),
          			'value' => $vars["entity"]->ciw_layout
          		));
          	?>
         </td>
      </tr>
	  
      </table>
    </div>
</div>
