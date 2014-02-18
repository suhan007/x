<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<?php echo $latest_skin_url ?>/style.css">

<div class="latest-posts" >
	<div class='inner'>
		<div class='title'><img src="<?=$latest_skin_url?>/img/latest_icon.png"><div class='label'>LATEST POSTS</div></div>
			
				<?php
					$num = 1;
					foreach ( $list as $li ) {
					if( $num == 3 ) $style = 'no-border'; 
				?>	
					<div class='items <?=$style?>'>
					<?
						$subject = conv_subject($li['wr_subject'], 80, "...");
						$url = $li['href'];
						echo "
							<a href='$url'>$subject</a>
						";
						$num ++;
					?>
					</div>
				
				<?}?>	
		<a class='more-posts' href='<?=g::url()?>/bbs/board.php?bo_table=<?=$bo_table?>'><img src='<?=$latest_skin_url?>/img/more-btn.png'/></a>
	</div>
</div>
