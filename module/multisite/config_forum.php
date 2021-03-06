<?
	if ( ! ms::admin() ) {
		echo "You are not admin";
		return;
	}
	if ( $in['mode'] == 'forum_setting' ) include_once x::dir() . '/module/multisite/forum_setting.php';
	else {
			/* 생성된 게시판 정보를 가저온다 */
			$board_id = ms::board_id( etc::domain() ).'\_';
			$qb = "bo_table LIKE '{$board_id}%'";
			$q = "SELECT bo_table, bo_subject, bo_count_write FROM $g5[board_table] WHERE $qb";
			$rows = db::rows( $q );
			$no_of_board = count($rows);
		?>
	<link rel='stylesheet' type='text/css' href='<?=x::url()?>/module/multisite/subsite.css' />
	<div class='config config_forum'>
	<div class='config-main-title'><div class='inner'><img src='<?=x::url().'/module/multisite/img/direction.png'?>'> Create a forum by putting a title on the textbox below</div></div>
		<div class='config-wrapper'>
			<div class='config-title'><span class='config-title-info'>Board List | 게시판 수 : <b><?=count($rows)?></span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>	
			<div class='config-container'>
		<form class='config_menu create-forum' target='hidden_iframe' autocomplete='off'>
			<input type='hidden' name='module' value='multisite' />
			<input type='hidden' name='action' value='config_forum_submit' />
			<input type='hidden' name='no_of_board' value=<?=$no_of_board?> />
			<input class='create-forum-input' type='text' name='subject' placeholder='게시판 제목을 입력하세요.' />
			<input type='submit' value='생성'/>
		</form>
		<!--<div class='no_of_board'>게시판 수 : <b><?=count($rows)?></b></div>-->
		<div style='clear:right;'></div>
		
		<table class='board_list' cellpadding=0 cellspacing=0 width='100%'>
			<tr class='header'>
				<td width=148>게시판 아이디</td>
				<td width=130>게시판 제목</td>
				<td width=80 align='center'>글 수</td>
				<td class='padding-extra1'>설정</td>
			</tr>
		<?php
		$i = 0;
		foreach ( $rows as $row ) {
			if ( $i % 2 ) $background="background";
			else $background = null;
			$i++;
			echo "
				<tr class='row $background' >
					<td width=148>$row[bo_table]</td>
					<td width=130>$row[bo_subject]</td>
					<td width=80 align='center'>".number_format($row['bo_count_write'])."</td>
					<td class='padding-extra2'>
						<a href='?module=multisite&action=config_forum&mode=forum_setting&bo_table=$row[bo_table]'><img src='".x::url()."/module/multisite/img/setting.png' /></a>
					</td>
				</tr>
			";
		}
		?>
		</table>

		<iframe src='javascript:void(0);' name='hidden_iframe' style='width: 100%; height: 300px; display:none;'></iframe>
		</div></div>
	</div>
<?}?>
