<?if ( $in['page'] ) include x::theme( $in['page'] );
else { ?>
<div class='top-panel'>
	<?	for ( $i = 1, $has_images = 0; $i <= 5 ; $i++) { 
			if( $banner_image = ms::meta( 'combanner_'.$i ) ) {
				$has_images++;
				break;
			}
		}
	?>
	<div style='border: solid 1px #0d98ba; padding: 1px; border-radius: 3px;'>
		<div class='banner'>
			<?
				if ( $has_images ) {
					$banner_url = ms::meta('img_url');
					for ( $i = 1; $i <= 5 ; $i++) {
						if( !$banner_image = ms::meta( 'combanner_'.$i ) ){
							continue;
						}
						if ( $i == 1 ) $first_image = 'selected';
						else $first_image = '';
						echo "<div class='banner-image image_num_$i $first_image'>";
						if ( !$url = ms::meta('combanner_'.$i.'_text3') )  $url = "javascript:void(0)";
						
						echo "<a href='$url' target='_blank'><img src='".$banner_url.$banner_image."'>";
						echo "<p class='banner-text'><span class='banner-title'>".ms::meta('combanner_'.$i.'_text1')." |</span> <span class='banner-content'>".cut_str(strip_tags(ms::meta('combanner_'.$i.'_text2')),60,'...')."</span></p>";
						echo "<div class='banner-more'>MORE &gt;</div>";
						echo "</a></div>";
					}
				}
				else {
					echo "<img src='".x::url_theme()."/img/no_image_banner1.png' />";
				}
			?>
		</div>
	</div>
	
	<div class='top-posts'>
		<table width='100%' cellspacing=0 cellpadding=0>
			<tr valign='top'>
			<td width='240'>
				<?php $latest_bo_table = ms::meta('forum_no_1');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='250'>
				<?php $latest_bo_table = ms::meta('forum_no_2');
					if( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='240' class='last-table-data'>
				<?php $latest_bo_table = ms::meta('forum_no_3');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts-images' , $latest_bo_table , 4, 25);
				?>
			</td>
			</tr>
		</table>		
	</div>
</div>

<div class='middle-panel'>
		<div class='middle-banner'>
			<?if( ms::meta('combanner_middle') )  { ?>
				<img src='<?=ms::meta('img_url').ms::meta('combanner_middle')?>'>
			<? }
				else {
					echo "<img src='".x::url_theme()."/img/no_image_banner2.png' />";
				}
			?>
		</div>
	
	<div class='middle-posts'>
		<table cellspacing=0 cellpadding=0 width='100%'> 
			<tr valign='top'>
			<td width='240'>
				<?php $latest_bo_table = ms::meta('forum_no_4');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='250'>
				<?php $latest_bo_table = ms::meta('forum_no_5');
					if( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='240' class='last-table-data'>
				<?php $latest_bo_table = ms::meta('forum_no_6');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts-images' , $latest_bo_table , 4, 25);
				?>
			</td>
			</tr>
		</table>			
	</div>
</div>

<div class='bottom-panel'>
	<div class='bottom-banner'>
		<?if( ms::meta('combanner_bottom') ) { ?>
			<img src='<?=ms::meta('img_url').ms::meta('combanner_bottom')?>'>
		<? }
			else {
				echo "<img src='".x::url_theme()."/img/no_image_banner2.png' />";
		}?>
	</div>
	
	<div class='bottom-posts'>
		<table width='100%' cellspacing=0 cellpadding=0>
			<tr valign='top'>
			<td width='240'>
				<?php $latest_bo_table = ms::meta('forum_no_7');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='250'>
				<?php $latest_bo_table = ms::meta('forum_no_8');
					if( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts' , $latest_bo_table , 6, 25);
				?>
			</td>
			<td width="10"></td>
			<td width='240' class='last-table-data'>
				<?php $latest_bo_table = ms::meta('forum_no_9');
					if ( g::forum_exist($latest_bo_table ) ) echo latest( 'x-latest-community-posts-images' , $latest_bo_table , 4, 25);
				?>
			</td>
			</tr>
		</table>
	</div>
</div>
<? } // if !in['page']?>