<div class='config-wrapper'>
	<div class='config-title'><span class='config-title-info'>Profile Picture and Information</span><span class='config-title-notice'><img src='<?=x::url().'/module/multisite/img/setting_2.png'?>'></span></div>
	<div class='config-container'>
		<table cellpadding=5px class='image-config'>
		<tr>
			<td valign='top'>
				<div class='image-title'>프로필 사진등록</div>
				<?if( ms::meta('blog_profile_photo') ) {?><img src="<?=ms::meta('img_url').ms::meta('blog_profile_photo')?>" width=280px height=160px><br><br><?}?>
				<input type='file' name='blog_profile_photo'>
				<?if( ms::meta('blog_profile_photo') != '' ) { ?>
					<input type='hidden' name='blog_profile_photo_remove' value='n'>
					<input type='checkbox' name='blog_profile_photo_remove' value='y'><span class='title-small'>Remove Image</span>
				<?}?>
			</td>
			<td  valign='top'>
				<div class='image-title'>프로필 하단 문구</div>
				<textarea name='blog_profile_message'><?=stripslashes(ms::meta('blog_profile_message'))?></textarea>
			</td>
		</tr>
	</table>
</div>
</div>
