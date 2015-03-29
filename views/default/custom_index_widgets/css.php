<?php
	/**
	 * Custom Index page css extender
	 * 
	 * @package custom_index
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider <info@elgg.com>
	 * @copyright Curverider Ltd 2008-2009
	 * @link http://elgg.org/
	 */
?>

.icon_members {
	float:left;
	margin:2pt 5px 3px 0pt;
}

.icon_latest {
	margin:0 auto;
}
#login-box{
	width:100%;
}
#login-box form{
	width:auto;
}

#login-box input[type="text"],
#login-box input[type="password"]{
	width: 95%;
}


#rightcolumn_widgets.small_edit_mode_box, 
#leftcolumn_widgets.small_edit_mode_box, 
#middlecolumn_widgets.small_edit_mode_box,
#customise_page_view table tr td h2.small_edit_mode_box { 
  width: 200px;
}
#rightcolumn_widgets.medium_edit_mode_box, 
#leftcolumn_widgets.medium_edit_mode_box, 
#middlecolumn_widgets.medium_edit_mode_box,
#customise_page_view table tr td h2.medium_edit_mode_box{
  width: 400px;
}
#rightcolumn_widgets.big_edit_mode_box, 
#leftcolumn_widgets.big_edit_mode_box, 
#middlecolumn_widgets.big_edit_mode_box,
#customise_page_view table tr td h2.big_edit_mode_box{ 
  margin:5px 10px 0 0;
  width: 630px;
}
#rightcolumn_widgets.half_edit_mode_box, 
#leftcolumn_widgets.half_edit_mode_box, 
#middlecolumn_widgets.half_edit_mode_box,
#customise_page_view table tr td h2.half_edit_mode_box{ 
  width: 306px;
}

#rightcolumn_widgets.small_index_mode_box, 
#leftcolumn_widgets.small_index_mode_box, 
#middlecolumn_widgets.small_index_mode_box,
#customise_page_view table tr td h2.small_index_mode_box { 
  width: 312px;
  padding: 0 0 5px;
  margin-right: 10px;
  border: 0 none;
}
#rightcolumn_widgets.medium_index_mode_box, 
#leftcolumn_widgets.medium_index_mode_box, 
#middlecolumn_widgets.medium_index_mode_box,
#customise_page_view table tr td h2.medium_index_mode_box{
  width: 608px;
  padding: 0 0 5px;
  margin-right: 10px;
  border: 0 none;
}
#rightcolumn_widgets.big_index_mode_box, 
#leftcolumn_widgets.big_index_mode_box, 
#middlecolumn_widgets.big_index_mode_box,
#customise_page_view table tr td h2.big_index_mode_box{ 
  width: auto;
  padding: 0 0 5px;
  margin-right: 10px;
  border: 0 none;
}
#rightcolumn_widgets.half_index_mode_box, 
#leftcolumn_widgets.half_index_mode_box, 
#middlecolumn_widgets.half_index_mode_box,
#customise_page_view.half_index_mode_box h2{ 
  width: 460px;
  padding: 0 0 5px;
  margin-right: 10px;
  border: 0 none;
}

table.index__mode, table.index_mode td{
  width: 100%;
  border: 0 none;
}

.logintop{
	margin:0 auto;
	padding:0;
	padding-top: 3px;
	width:990px;
}
.logintop_links{
	float: right;
}

.logintop_links a {
	margin:0 0 0 2px;
	color:#999999;
	padding:3px;
}
.logintop_links a:hover {
	color:#eeeeee;
}

#logintopform input.logintop_input {
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	background-color:#FFFFFF;
	border:1px solid #BBBBBB;
	color:#999999;
	font-size:12px;
	font-weight:bold;
	margin:0pt;
	padding:2px;
	width:180px;
	height:12px;
}
#logintopform input.logintop_submit_button {
	-webkit-border-radius: 4px; 
	-moz-border-radius: 4px;
	color:#333333;
	background: #cccccc;
	border:none;
	font-size:12px;
	font-weight:bold;
	margin:0px;
	padding:2px;
	width:auto;
	height:18px;
	cursor:pointer;
}
#logintopform input.logintop_submit_button:hover {
	color:#ffffff;
	background: #4690d6;
}