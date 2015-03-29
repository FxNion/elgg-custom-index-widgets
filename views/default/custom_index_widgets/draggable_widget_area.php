<?php

  // Recuperation des variables necessaires
  $columnwidget_size = $vars['columnwidget_size'];
  $widgettypes       = $vars['widgettypes'];
  $widget            = $vars['widget'];
?>
    <table class="draggable_widget" cellspacing="0">
      <tr>
        <td width="<?php echo $columnwidget_size; ?>px">
          <h3>
            <?php echo $widgettypes[$widget->handler]->name; ?>
            <input type="hidden" name="handler" value="<?php 	echo $widget-> handler; ?>" />
            <input type="hidden" name="multiple" value="<?php echo $widgettypes[$widget-> handler]->multiple; ?>" />
            <input type="hidden" name="side" value="<?php echo in_array('side',$widgettypes[$widget-> handler]->positions); ?>" />
            <input type="hidden" name="main" value="<?php echo in_array('main',$widgettypes[$widget-> handler]->positions); ?>" />
            <input type="hidden" name="description" value="<?php echo htmlentities($widgettypes[$widget-> handler]->description, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="guid" value="<?php echo $widget-> getGUID(); ?>" /></h3></td>
        <td width="17px" align="right"></td>
        <td width="17px" align="right">
          <a href="#">
            <img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" width="14px" height="14px" class="more_info" /></a></td>
        <td width="17px" align="right">
          <a href="#">
            <img src="<?php echo $vars['url']; ?>_graphics/spacer.gif" width="15px" height="15px" class="drag_handle" /></a></td>
      </tr>
    </table>

