<?php
x::hook_register('tail_begin', 'hook_multisite_tail_begin');

$theme_sidebar = ms::meta('theme_sidebar');
function hook_multisite_tail_begin() {
	global $theme_sidebar;

	if($theme_sidebar == 'right') {
	?><style>
		.layout .main-content .layout-divider {	display: none; }
		.layout .main-content .left { float:right; }
		.layout .main-content .content { float: left; width: 760px; }
		
	</style><?}?>

<? }
