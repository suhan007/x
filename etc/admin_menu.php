<?php
if ( ! admin() ) {
	echo "You are not admin";
	return;
}
?>
<link rel="stylesheet" href="module/admin/menu.css">
<script type='text/javascript' src="module/admin/admin_menu.js"></script>
<div class='admin-menu'>
<?
$files = file::getFiles( x::dir() . '/module', true, "/admin_menu\.php/");
foreach ( $files as $file ) {
	$menu = array();
	include $file;
	$admin_menu[$menu['name']] = $menu;
}
ksort($admin_menu);
admin_menu_display();
function admin_menu_display()
{
	global $admin_menu, $in, $current_page;
	echo "<ul class='admin-menu'>";
	foreach( $admin_menu as $menu ) {
		$name = $menu['name'];
		$name = preg_replace("/^[0-9] /", '', $name);
		unset($menu['name']);
		if ( $name == 'System' ) $href = "href = '".x::url()."/?module=multidomain&action=admin_list'";
		else if ( $name == 'Multi-Site' ) $href = "href = '".x::url()."/?module=multisite&action=admin_multisite'";
		echo "<li class='name'><a $href class='menu-name'>$name</a>";
		echo "<ul class='submenu'>";
		foreach ( $menu as $name => $url ) {
			$tmp = str_replace('?', '', $url);
			parse_str($tmp, $str);
			$current_page = 'module='.$_GET['module'].'&action='.$_GET['action'];
			if ($current_page == $tmp) $sel = "active-page";
			else $sel = '';
			echo "<li class='$sel'><a href='$url'>$name</a></li>";
		}
		echo "</ul></li>";
	}
	echo "</ul>			";

	if($current_page!='module=admin&action=index') {
	?>	<style>
			.admin-menu {
				margin-bottom: 4em;
			}
		</style>
	<?
	}
}
?>
<div style='clear:left;'></div>
</div>
	