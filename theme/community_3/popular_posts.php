<?php
if ( g::forum_exist($forum_1) ) $row1[$forum_1] = db::rows("SELECT wr_id, wr_subject, wr_datetime, wr_comment, wr_hit FROM ".$g5['write_prefix'].$forum_1." WHERE wr_datetime > '$begin_date' ORDER BY wr_hit DESC LIMIT 2");
if ( g::forum_exist($forum_2) ) $row2[$forum_2] = db::rows("SELECT wr_id, wr_subject, wr_datetime, wr_comment, wr_hit FROM ".$g5['write_prefix'].$forum_2." WHERE wr_datetime > '$begin_date' ORDER BY wr_hit DESC LIMIT 2");
if ( g::forum_exist($forum_3) ) $row3[$forum_3] = db::rows("SELECT wr_id, wr_subject, wr_datetime, wr_comment, wr_hit FROM ".$g5['write_prefix'].$forum_3." WHERE wr_datetime > '$begin_date' ORDER BY wr_hit DESC LIMIT 2");
if ( g::forum_exist($forum_4) ) $row4[$forum_4] = db::rows("SELECT wr_id, wr_subject, wr_datetime, wr_comment, wr_hit FROM ".$g5['write_prefix'].$forum_4." WHERE wr_datetime > '$begin_date' ORDER BY wr_hit DESC LIMIT 2");
if ( g::forum_exist($forum_5) ) $row5[$forum_5] = db::rows("SELECT wr_id, wr_subject, wr_datetime, wr_comment, wr_hit FROM ".$g5['write_prefix'].$forum_5." WHERE wr_datetime > '$begin_date' ORDER BY wr_hit DESC LIMIT 2");

if ( g::forum_exist($forum_1) && g::forum_exist($forum_2) && g::forum_exist($forum_3) && g::forum_exist($forum_4) && g::forum_exist($forum_5)) { 
	$posts = array_merge ( $row1, $row2, $row3, $row4, $row5 ); 
?>

<div class='popular-posts'>
	<div class='title'>
		<table width='100%'>
			<tr valign='top'>
				<td align='left' class='title-left'>
					<img src="<?=x::url_theme()?>/img/popular-posts.png">
					<span class='label'>POPULAR POSTS</span>
				</td>
			</tr>
		</table>
	</div>
	
	<div class='popular-posts-items'>
		<table cellspacing='5'>
		<?php
		if ( $posts ) {
			$i = 1;
			$ctr = 0;
			foreach ( $posts as $key => $value ) {  $ctr = $ctr + count($value); }
			foreach ( $posts as $key => $post ) {
				foreach ( $post as $p ) {
					$url = G5_BBS_URL."/board.php?bo_table=$key&wr_id=$p[wr_id]";
					$popular_subject = conv_subject( $p['wr_subject'], 14, '...');
					$no_of_views = $p['wr_hit'];
					$no_of_comments = $p['wr_comment'];
					
						if ( $i==$ctr ) $last_post = "class='last-post'";
						echo "
								<tr $last_post>
									<td width='20'>
										<div class='post-num'>$i </div>
									</td>
									<td width='120'>
										<a href='$url'>$popular_subject</a>
									</td>
									<td width='50' align='right'>
									<table class='popular-views'>
										<tr valign='top' align='right'>
											<td rowspan=2 width='10'>
												<img src='".x::url_theme()."/img/views.png'>
											</td>
											<td width='20>
												<span class='num_views'>$no_of_views</span>
											</td>
										</tr>
										<tr valign='top' align='right'>
											<td>
												<span class='num_comments'>[ $no_of_comments ]</span>
											</td>
										</tr>
									</table>
									</td>
								</tr>
						";
					$i++;
				}
		
			 }
		}
		/**else {?>
					<div class='row'>
						<span class='post-num'> 1 </span>
						<a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=5'>사이트 만들기 안내</a>
					</div>
					<div class='row'>
						<span class='post-num'> 2 </span>
						<a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=4'>블로그 만들기</a>
					</div>
					<div class='row'>
						<span class='post-num'> 3 </span>
						<a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=3'>커뮤니티 사이트 만들기</a>
					</div>
					<div class='row'>
						<span class='post-num'> 4 </span>
						<a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=2'>여행사 사이트 만들기</a>
					</div>
					<div class='row'>
						<span class='post-num'> 5 </span>
						<a href='http://www.philgo.net/bbs/board.php?bo_table=help&wr_id=1'>(모바일)홈페이지, 스마트폰 앱</a>
					</div>
		<?}*/?>
		</table>
	</div>
	</div>
<?}?>