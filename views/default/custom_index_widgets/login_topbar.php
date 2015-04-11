<?php

	/**
	 * Elgg top toolbar
	 * The standard elgg top toolbar
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 */
?>

<?php
  $login_style = get_plugin_setting("login_style", "custom_index_widgets");
  if (!isset($login_style)) 
  	$login_style = 'inlayout';
  
  if (!isloggedin() && $login_style == 'topbar') {
     
     global $CONFIG;
	
	$form_body  = elgg_echo('login');
  	$form_body  = elgg_echo('username') . elgg_view('input/text', array('internalname' => 'username', 'class' => 'logintop_input'));
  	$form_body .= elgg_echo('password') . elgg_view('input/password', array('internalname' => 'password', 'class' => 'logintop_input'));
  	$form_body .= elgg_view('input/submit', array('value' => elgg_echo('login'), 'class' => 'logintop_submit_button'));
  	  	
	$form_body .= "<p class=\"logintop_links\">";
	$form_body .=  (!isset($CONFIG->disable_registration) || !($CONFIG->disable_registration)) ? "<a href=\"{$vars['url']}account/register.php\">" . elgg_echo('register') . "</a> |" : "";
  	$form_body .=  "<a href=\"{$vars['url']}account/forgotten_password.php\">" . elgg_echo('user:password:lost');  
	$form_body .= "</p>";
  	
	$login_url = $vars['url'];
	
  	if ((isset($CONFIG->https_login)) && ($CONFIG->https_login))
  		$login_url = str_replace("http", "https", $vars['url']);
?>

	<div id="elgg_topbar" >
	
	<div id="elgg_topbar_container_left" style="width: 10%">
		<div class="toolbarimages">
			<a href="<?php echo $vars['url']; ?>"><img src="<?php echo $vars['url']; ?>_graphics/elgg_toolbar_logo.gif" /></a>
		</div>
	</div>
	<div class="logintop">
		<?php 
			echo elgg_view('input/form', array('internalid' => 'logintopform' , 'body' => $form_body, 'action' => "{$login_url}action/login"));
		?>
		
	</div>
	</div><!-- /#elgg_topbar -->
	
	<div style="clear:both;"></div>

<?php
    } 
	elseif (isloggedin() )
	{
?>

<div id="elgg_topbar">

<div id="elgg_topbar_container_left">
	<div class="toolbarimages">
		<a href="<?php echo $vars['url']; ?>"><img src="<?php echo $vars['url']; ?>_graphics/elgg_toolbar_logo.gif" /></a>
		
		<a href="<?php echo $_SESSION['user']->getURL(); ?>"><img class="user_mini_avatar" src="<?php echo $_SESSION['user']->getIcon('topbar'); ?>" /></a>
		
	</div>
	<div class="toolbarlinks">
		<a href="<?php echo $vars['url']; ?>pg/dashboard/" class="pagelinks"><?php echo elgg_echo('dashboard'); ?></a>
	</div>
        <?php

	        echo elgg_view("navigation/topbar_tools");

        ?>
        	
        	
        <div class="toolbarlinks2">		
		<?php
		//allow people to extend this top menu
		echo elgg_view('elgg_topbar/extend', $vars);
		?>
		
		<a href="<?php echo $vars['url']; ?>pg/settings/" class="usersettings"><?php echo elgg_echo('settings'); ?></a>
		
		<?php
		
			// The administration link is for admin or site admin users only
			if ($vars['user']->admin || $vars['user']->siteadmin) { 
		
		?>
		
			<a href="<?php echo $vars['url']; ?>pg/admin/" class="usersettings"><?php echo elgg_echo("admin"); ?></a>
		
		<?php
		
				}
		
		?>
	</div>


</div>


<div id="elgg_topbar_container_right">
		<a href="<?php echo $vars['url']; ?>action/logout"><small><?php echo elgg_echo('logout'); ?></small></a>
</div>

<div id="elgg_topbar_container_search">
<form id="searchform" action="<?php echo $vars['url']; ?>pg/search/" method="get">
	<input type="text" size="21" name="tag" value="<?php echo elgg_echo('search'); ?>" onclick="if (this.value=='<?php echo elgg_echo('search'); ?>') { this.value='' }" class="search_input" />
	<input type="submit" value="<?php echo elgg_echo('search:go'); ?>" class="search_submit_button" />
</form>
</div>

</div><!-- /#elgg_topbar -->

<div class="clearfloat"></div>

<?php
    }
	
?>
